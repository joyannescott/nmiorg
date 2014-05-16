<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    } 
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?> 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link href="bootstrap.icon-large.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="no title" charset="utf-8">


</head>
<body>
<div class="wrapper">

Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>, secret content!<br /> 
<a href="membershiplist.php">Memberlist</a><br /> 
<a href="edit_account.php">Edit Account</a><br /> 
<a href="logout.php">Logout</a>
</div>
</body>
</html>
