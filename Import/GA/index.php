<?php 
    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");
    require_once(TABLE . "entries.php");

    $pageType   = "import";
    $table_url = BASE_URL . "tables/table_data_ga.php";
    $bootstrap_inc = "true";
    $headers = array("Name", "Email");
 
    // Check to see whether the user is logged in or not 
   if(empty($_SESSION['user']) || !is_administrator( $_SESSION['user']['email']))
    {  
        $_SESSION['alert_message'] = "Adminitrators, please login to access this page.";
        header("Location:" . BASE_URL . "Login"); 
         
        // This die statement is absolutely critical.   
        die("Redirecting to Login"); 
    } 


    $entries = get_ga_members_all();
    include(INC . 'header.php');
    include(INC . 'sidebar.php');   

?> 

<div id="mainContent">
    <?php include(LOGIN . 'login_header.php'); ?>
    <h1> Grand Assembly Members Table </h1>
    <?php include(TABLE . 'table_partial.php'); ?>
    <p>&nbsp;</p>
</div>

<?php 
    include( INC . 'footer.php');
?>
<script type="text/javascript"> var table_url = "<?php echo $table_url; ?>";</script>
<script type="text/javascript" language="javascript" src="<?php echo BASE_URL; ?>js/table.js"></script>