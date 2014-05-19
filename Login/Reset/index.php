<?php 

    // First we execute our common code to connection to the database and start the session 
    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");
    
    // This if statement checks to determine whether the edit form has been submitted 
    // If it has, then the account updating code is run, otherwise the form is displayed 
    if(!empty($_POST)) 
    { 
        $alert_message = "";
        $email = trim($_POST["email"]);


        // Make sure the user entered a valid E-Mail address 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { 
            $alert_message .= "Invalid E-Mail Address. "; 
        } 
         
        if(empty($alert_message)) {
            // If the user is changing their E-Mail address, we need to make sure that 
            // the new value does not conflict with a value that is already in the system. 
            // If the user is not changing their E-Mail address this check is not needed. 
            if($_POST['email'] != $_SESSION['user']['email']) 
            { 
                // Define our SQL query 
                $query = " 
                    SELECT 
                    salt, username, fullname
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
                    $token = md5($_POST['email'].time());
 
                    if(UNAME == nmiorg){
                        //Send Email
                        require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
                        $mail = new PHPMailer();

                        $email_body = "";
                        $email_body = $email_body . "Hello, " . $row["fullname"] . "!<br><br>";

                        $email_body = $email_body . "To change your password, please follow the following link: <br>";
                        $email_body = $email_body . "http://www.nmiorg.org/Login/Account?u=" . $row['username'] . "&t=" . $token;
                        $email_body = $email_body . "<br><br> Thanks, The Grand Assembly of New Mexico";

                        $mail->From  = "joyfitz@mac.com";
                        $mail->FromName  = "New Mexico Rainbow";
                        $address = $email;
                        $name = $row["fullname"];
                        $mail->AddAddress($address, $name);
                        $mail->Subject    = "Password Reset";
                        $mail->MsgHTML($email_body); 

                        if($mail->Send()) {

                        } else {
                          $alert_message = "There was a problem sending the email: " . $mail->ErrorInfo;
                        }
                    } 
             
                    $token_hash = hash('sha256', $token . $row['salt']); 
             
                    for($round = 0; $round < 65536; $round++) 
                    { 
                        $token_hash = hash('sha256', $token_hash . $row['salt']); 
                    } 
                    // Define our SQL query                      
                     $query = " 
                        UPDATE users 
                        SET 
                            token    = :token
                        WHERE 
                            email = :email 
                    "; 
                    
                    // Define our query parameter values 
                    $query_params = array( 
                        ':token' => $token_hash, 
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
                       

                } 
                // This redirects to the login page
                 if($_SESSION['last_url']) {
                    $_SESSION['alert_message'] = "Please check your email for your password reset message";
                    header("location: " . BASE_URL . "Login");
                 } else {
                    header("location: " . BASE_URL);
                 }
                // Calling die or exit after performing a redirect using the header function
                // is critical.  The rest of your PHP script will continue to execute and 
                // will be sent to the user if you do not die or exit. 
                die("Redirecting to previous page."); 
            } 
         }
     } 
    $bootstrap_inc = "true";
 
    include(INC . 'header.php');
    include(INC . 'sidebar.php');   
     
?> 
<div id="mainContent">
    <?php include(LOGIN . "login_header.php"); ?>

    <?php if($alert_message) { ?>

        <p class="alert alert-danger">
            &nbsp;
           <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $alert_message ?> 
        </p>
    <?php } ?>


<form action="." method="post"> 
<h1>Reset Your Password</h1> 

        <p>
            <label for="email">Email</label>
            <input id="email" name="email" type="text" 
                   value="">
        </p>
        <p>
            <input type="submit" value="Reset" id="submit">
        </p>

</form>


</div>

<?php 
    include( INC . 'footer.php');
?>
