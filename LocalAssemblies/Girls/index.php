<?php 
    $headers = array("Assembly", "Name", "Email");

    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");

    $pageType   = "Assemblies";
    $table_url = BASE_URL . "tables/table_data_girls.php";
    $bootstrap_inc = "true";
 
     require_once(TABLE . "entries.php");

    // Check to see whether the user is logged in or not 
    if(empty($_SESSION['user']) || !(is_administrator( $_SESSION['user']['email'])  || 
                                     is_mother_advisor($_SESSION['user']['email'])))
   {  
        $_SESSION['alert_message'] = "Mother Advisors, please login to access this page.";
        header("Location: " . BASE_URL . "Login"); 
         
        // This die statement is absolutely critical.   
        die("Redirecting to Login"); 
    } 


    $entries = array();
    $assemblies = is_mother_advisor($_SESSION['user']['email']);

    if($assemblies) {
        foreach($assemblies as $assembly) {
            $assembly_entries = get_girls_assembly($assembly['num']);
            foreach($assembly_entries as $entry){
                array_push($entries, $entry);
            }
        }
    } else {
         $entries = get_girls_all();
    }
   include(INC . 'header.php');
    include(INC . 'sidebar.php');   

?> 

<div id="mainContent">
    <?php include(LOGIN . 'login_header.php');?>
 
     <h1> 
         <?php if($assemblies) {
            foreach($assemblies as $assembly) {
                echo  $assembly['assembly'] . " Assembly #" . $assembly['num'] . "<br>" ;
            }
        }?>
       Email Access
    </h1>
    <?php include(TABLE . 'table_partial.php'); ?>
    <p>&nbsp;</p>
</div>

<?php 
    include( INC . 'footer.php');
?>
<script type="text/javascript"> var table_url = "<?php echo $table_url; ?>";</script>
<script type="text/javascript" language="javascript" src="<?php echo BASE_URL; ?>js/table.js"></script>