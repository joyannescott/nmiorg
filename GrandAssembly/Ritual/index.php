<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");

    require_once(TABLE . "entries.php");
 

    // Check to see whether the user is logged in or not 
    if(empty($_SESSION['user']) || !(is_administrator( $_SESSION['user']['email'])  || 
                                     is_mother_advisor($_SESSION['user']['email'])))
    {  
        $_SESSION['alert_message'] = "Mohter Advisors, please login to access the Ritual Registration.";
        $_SESSION['last_url'] = BASE_URL . "GrandAssembly/Ritual";
        header("Location:" . BASE_URL . "Login"); 
         
        // This die statement is absolutely critical.   
        die("Redirecting to Login"); 
    } 

    $table_url     = BASE_URL . "tables/table_data_ritual.php";
    $pageType      = "GA";
    $bootstrap_inc = "true";
    $no_sidebar    = true;  

    $cells = array(
            "assembly",
            "name",
            "age",
            "initiated",
            "office",
            "go",
            "master",
            "supreme",
            "grand",
            "floor",
            "bow",
            "begining",
            "day",
            "time");

    $assembly = is_mother_advisor($_SESSION['user']['email']);

    if($assembly) {
        $entries = get_ritual_registration_assembly($assembly['num']);
        $shift = array_shift($cells);
    } else {
         $entries = get_ritual_registration_all();
    }

    include(INC . 'header.php');
    include(INC . 'sidebar.php');   
 ?> 

<div id="mainContent-nosidebar">
  <script type="text/javascript"> var assembly = "<?php echo $assembly['num']; ?>";</script>

    <?php include(LOGIN . 'login_header.php'); ?>

    <h1> Ritual Registration -
        <?php if($assembly) {echo $assembly['assembly'] . " Assembly #" . $assembly['num'];}?>
    </h1>
    <?php include(TABLE . 'table_partial_ritual.php'); ?>
</div>

<?php 
    include( INC . 'footer.php');
?>
<script type="text/javascript"> var table_url = "<?php echo $table_url; ?>";</script>
<script type="text/javascript" language="javascript" src="<?php echo BASE_URL; ?>js/table_ritual.js"></script>
