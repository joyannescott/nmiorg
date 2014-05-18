<?php 

    // First we execute our common code to connection to the database and start the session 
    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");
     
    // We remove the user's data from the session 
    unset($_SESSION['user']); 
     
    // We redirect them to the login page 
    header("Location: " . $_SESSION['last_url']); 
    die("Redirecting to: last page");