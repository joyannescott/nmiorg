<?php 
    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");
    require(TABLE . "entries.php");

    // Check to see whether the user is logged in or not 
    if(empty($_SESSION['user']) || !is_administrator($_SESSION['user']['email'])) 
    {  
        header("Location: ". BASE_URL . "login/login.php"); 
         
        // This die statement is absolutely critical.   
        die("Redirecting to login"); 
    } 
 
    $pageType   = "import";
    $bootstrap_inc = "true";

    $table_url = TABLE . "table_data_ma.php";
    $headers = array("Name", "Assembly", "Email");
    $entries = get_mother_advisors_all();

    include(INC . 'header.php');
    include(INC . 'sidebar.php');   
?> 

<div id="mainContent">
    <?php include(LOGIN . 'login_header.php'); ?>
    <h1> Mother Advisor Table </h1>
    <?php include(TABLE . 'table_partial.php'); ?>

</div>

<?php 
    include( INC . 'footer.php');
?>
