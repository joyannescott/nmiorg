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

    $entries = array();
    $assemblies = is_mother_advisor($_SESSION['user']['email']);

    if($assemblies) {
        foreach($assemblies as $assembly) {
            $assembly_entries = get_ritual_registration_assembly($assembly['num']);
            foreach($assembly_entries as $entry){
                array_push($entries, $entry);
            }
        }
    } else {
         $entries = get_ritual_registration_all();
    }

    include(INC . 'header.php');
    include(INC . 'sidebar.php');   
 ?> 

<div id="mainContent-nosidebar">
  <script type="text/javascript"> var assembly = "<?php echo $assembly['num']; ?>";</script>

    <?php include(LOGIN . 'login_header.php'); ?>

    <h1> Grand Assembly Ritual Competition Registration 
        <?php if($assemblies) {
            foreach($assemblies as $assembly) {
                echo "<br>" . $assembly['assembly'] . " Assembly #" . $assembly['num'];
            }
        }?>
    </h1>
    <?php include(TABLE . 'table_partial_ritual.php'); ?>



    <p>
      Changes to these items will be blocked June 14th. 
    </p>

   <div id="table" class="ritual">
  <table class="table table-centered table-striped table-bordered">
     <tr><th colspan = "2"><h2>Judging Criteria </h2></th></tr>
       <tr>
            <td>60%</td> <td>Competency (Memorization)</td>
        </tr>
        <tr>
            <td>25%</td> <td>Presentation (Expression, slow & clear delivery, smile)</td>
        </tr>
        <tr>
            <td>15%</td> <td>Eye Contact, Floor Work, and use of Paraphernalia as appropriate. </td>
        </tr>
        <tr>
            <td>Paraphernalia Provided</td> <td>Pedestal with color ribbon and Pot of Gold</td>
        </tr>
    <tr><th colspan = "2">For more information: Contact Joy Scott at joyfitz@mac.com </th></tr>
    </table>
    </div>
  <div id="table" class="ritual">
    <table class="table table-centered table-striped table-bordered">
       <tr>
            <th><h2>Category</h2></th>     <th><h2>Eligibility Requirements</h2></th>    <th colspan="2"><h2> Ritual Requirements</h2></th>
        </tr>
        <tr>
            <td><div class="freehand-p"><div class="Red">Supreme Ritualist</div> </div></td>
            <td>Any Active New Mexico Rainbow Girl.
                The girls can compete in this category as well
                As an additional category.
            <td> Bow Grab Bag  </td>
            <td>  Contestants 
                will randomly draw a bow station from a bag. 
                They will be allowed two tries.</td>
        </tr>
        <tr>

             <td><div class="freehand-p"><div class="Orange">Grand  Ritualist</div> </div></td>
             <td> All Past Worthy Advisors, Worthy Advisors, 
                Worthy Associate Advisors, 
                and Sisters of Charity, as of the 
                Spring Term 2013, should compete here, 
                unless initiated after 07/01/12 </td>
            <td> Charity</td>
            <td> Charity's 
                Initiation Lecture </td>
        </tr>
        <tr>
             <td><div class="freehand-p"><div class="Yellow">Floor Ritualist</div> </div></td>  
             <td>All other elected or appointed officers 
                (except bow stations)
                must compete here or higher, 
                unless initiated after 07/01/12 </td>
            <td>Chaplain
                Faith  </td>
            <td> Chaplain's Initiation Prayer
                Faith's Scriptures 
                (Done while walking)</td>
        </tr>
        <tr>
            <td><div class="freehand-p"><div class="Green">Bow Ritualist</div> </div></td>  
            <td> All bow station officers
                must compete here or higher,
                unless initiated after 07/01/12 </td>
            <td>Bow</td>
            <td> Choose any one of the seven 
                color station lectures </td>
        </tr>
        <tr>
            <td><div class="freehand-p"><div class="Blue"> Beginning Ritualist</div> </div></td>  
            <td> Any girl initiated after 07/01/12  </td>
            <td> Misc. </td>
            <td> Test oath, Correct presentation 
                of all signs </td>
    </table>
  </div>
  <p>
    Note: Eligibility is determined based on the girl's new office in January of 2013 
  </p>
</div>

<?php 
    include( INC . 'footer.php');
?>
<script type="text/javascript"> var table_url = "<?php echo $table_url; ?>";</script>
<script type="text/javascript" language="javascript" src="<?php echo BASE_URL; ?>js/table_ritual.js"></script>
