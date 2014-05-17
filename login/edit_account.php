<?php 

    // First we execute our common code to connection to the database and start the session 
    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");
    
    echo "hello";

    if(isset($_GET["t"])){
        echo "found get data";
        $token = $_GET["t"];
        echo "token " . $token;
         // Define our SQL query 
        $query = " 
            SELECT 
            username, fullname, email 
            FROM users 
            WHERE 
                token = :token 
        "; 
         
        // Define our query parameter values 
        $query_params = array( 
            ':token' => $token
        ); 
         
        try 
        { 
            // Execute the query 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            // Note: On a production website, you should not output $ex->getMessage(). 
            // It may provide an attacker with helpful information about your code.  
            die("Failed to run query: " . $ex->getMessage()); 
        } 
        // Retrieve results (if any) 
        $row = $stmt->fetch(); 
        if($row) 
        { 
            echo " found user";
            //This is a valid password reset link
             
            // This stores the user's data into the session at the index 'user'. 
            // We will check this index on the private members-only page to determine whether 
            // or not the user is logged in.  We can also use it to retrieve 
            // the user's details. 
            $_SESSION['user'] = $row; 
            echo "username = " . $_SESSION['user']['username'];
            echo "username = " . $row['username'];
       } 
 
    }

    if(empty($_SESSION['user']))     // Is user logged in or not 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    } 
     
    // This if statement checks to determine whether the edit form has been submitted 
    // If it has, then the account updating code is run, otherwise the form is displayed 
    if(!empty($_POST)) 
    { 
        $alert_message = "";

        // Ensure that the user has entered a non-empty full name 
        if(empty($_POST['fullname'])) 
        { 
            $alert_message .= "Please enter your full name. "; 
        } 


        // Make sure the user entered a valid E-Mail address 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { 
            $alert_message .= "Invalid E-Mail Address. "; 
        } 
         
        // If the user is changing their E-Mail address, we need to make sure that 
        // the new value does not conflict with a value that is already in the system. 
        // If the user is not changing their E-Mail address this check is not needed. 
        if($_POST['email'] != $_SESSION['user']['email']) 
        { 
            // Define our SQL query 
            $query = " 
                SELECT 
                1 
                FROM users 
                WHERE 
                    email = :email 
            "; 
             
            // Define our query parameter values 
            $query_params = array( 
                ':email' => $_POST['email'] 
            ); 
             
            try 
            { 
                // Execute the query 
                $stmt = $db->prepare($query); 
                $result = $stmt->execute($query_params); 
            } 
            catch(PDOException $ex) 
            { 
                // Note: On a production website, you should not output $ex->getMessage(). 
                // It may provide an attacker with helpful information about your code.  
                die("Failed to run query: " . $ex->getMessage()); 
            } 
             
            // Retrieve results (if any) 
            $row = $stmt->fetch(); 
            if($row) 
            { 
                die("This E-Mail address is already in use"); 
            } 
        } 
         
        // If the user entered a new password, we need to hash it and generate a fresh salt 
        // for good measure. 
        if(!empty($_POST['password'])) 
        { 
            $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
            $password = hash('sha256', $_POST['password'] . $salt); 
            for($round = 0; $round < 65536; $round++) 
            { 
                $password = hash('sha256', $password . $salt); 
            } 
        } 
        else 
        { 
            // If the user did not enter a new password we will not update their old one. 
            $password = null; 
            $salt = null; 
        } 
         
        // Initial query parameter values 
        $query_params = array( 
            ':email' => $_POST['email'], 
            ':fullname' => $_POST['fullname'], 
            ':token' => 0, //clean the token
            ':user_id' => $_SESSION['user']['id'], 
        ); 
         
        // If the user is changing their password, then we need parameter values 
        // for the new password hash and salt too. 
        if($password !== null) 
        { 
            $query_params[':password'] = $password; 
            $query_params[':salt'] = $salt; 
        } 
         
        // Note how this is only first half of the necessary update query.  We will dynamically 
        // construct the rest of it depending on whether or not the user is changing
        // their password. 
        $query = " 
            UPDATE users 
            SET 
                email    = :email, 
                fullname = :fullname 
                token    = :token 
        "; 
         
        // If the user is changing their password, then we extend the SQL query 
        // to include the password and salt columns and parameter tokens too. 
        if($password !== null) 
        { 
            $query .= " 
                , password = :password 
                , salt = :salt 
            "; 
        } 
         
        // Finally we finish the update query by specifying that we only wish 
        // to update the one record with for the current user. 
        $query .= " 
            WHERE 
                id = :user_id 
        "; 
         
        try 
        { 
            // Execute the query 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            // Note: On a production website, you should not output $ex->getMessage(). 
            // It may provide an attacker with helpful information about your code. 
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        // Now that the user's E-Mail address has changed, the data stored in the $_SESSION 
        // array is stale; we need to update it so that it is accurate. 
        $_SESSION['user']['email'] = $_POST['email']; 
        $_SESSION['user']['fullname'] = $_POST['fullname']; 
         
        // This redirects the user back to the members-only page after they register
         if($_SESSION['last_url'])
            header("location: " . $_SESSION['last_url']);
        else
            header("location: " . BASE_URL);
         
        // Calling die or exit after performing a redirect using the header function
        // is critical.  The rest of your PHP script will continue to execute and 
        // will be sent to the user if you do not die or exit. 
        die("Redirecting to previous page."); 
    } 
    $bootstrap_inc = "true";
 
    include(INC . 'header.php');
    include(INC . 'sidebar.php');   
     
?> 
<div id="mainContent">
    <?php include("../login/login_header.php"); ?>

       <?php if($alert_message) { ?>

        <p class="alert alert-danger">
            &nbsp;
           <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $alert_message ?> 
        </p>
    <?php } ?>


<form action="edit_account.php" method="post"> 
<h1>Edit Account</h1> 
        <h4>
            Username:
            <b><?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></b> 
       </h4>        
       <i> <center>
            <?php if(is_administrator( $_SESSION['user']['email'])) echo "Administor ";
                  if(is_mother_advisor($_SESSION['user']['email'])) echo "Mother Advisor ";
            ?>
        </center>
       </i>
       <p>
            <label for="fullname">Full Name</label>
            <input id="fullname" name="fullname" type="text" 
                   value="<?php echo htmlentities($_SESSION['user']['fullname'], ENT_QUOTES, 'UTF-8'); ?>">
       </p>

        <p>
            <label for="email">Email</label>
            <input id="email" name="email" type="text" 
                   value="<?php echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?>">
        </p>
         <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" value="">
            <span>Enter a password longer than 6 characters</span>
            <?php if(!$token) { ?>
            <i>(leave blank if you do not want to change your password)</i> 
            <?php } ?>
        </p>
        <p>
            <label for="confirm_password">Confirm Password</label>
            <input id="confirm_password" name="confirm_password" type="password" value="">
            <span>Please confirm your password</span>
        </p>
        <p>
            <input type="submit" value="Update Account" id="submit">
        </p>

</form>


</div>

<?php 
    include( INC . 'footer.php');
?>
<script type="text/javascript"> var edit = true; </script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>js/register.js"></script>