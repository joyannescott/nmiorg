<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "GO";
   //$bootstrap_inc = "true";


   require_once( INC . 'Info.php');
   $current_year = get_most_recent_year();
   $grandOffices = get_floor_officers(2015);
   $Assemblies  = get_assemblies();

   $year = 0;
   $assembly = 0;
   $office = "0";
   $search_term = "";
   $first = "";
   $last  = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
       $year = $_POST["year"];
       $assembly = $_POST["assembly"];
       $office = $_POST["office"];
       if(isset($_POST["s"])){

         $search_term = trim($_POST["s"]);
         $names = explode(" ", $search_term, 3);
         $first = $names[0];
         if(count($names > 1))
            $last = $names[1];
       }
      if(empty($_POST["pg"])){
          $current_page = 1;
      } else {
        $current_page = $_POST["pg"];
      }
      $current_page = intval($current_page);
 
      $total_officers = get_floor_officers_count($year, $office, $assembly, $first, $last);
      $officers_per_page = 100;

      $total_pages = ceil($total_officers/$officers_per_page);
      if($current_page > $total_pages){
          header("Location: ./");
      }
      if($current_page < 1){
        header("Location: ./");
      }

      $start = ($current_page - 1) * $officers_per_page + 1;
      $end = $current_page * $officers_per_page;
      if($end > $total_officers){
        $end = $total_officers;
      }

      $grandOfficers = get_floor_officers_search($year, 
                                                 $office, 
                                                 $assembly, 
                                                 $first, 
                                                 $last,
                                                 $start,
                                                 $end);
    }

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  
  ?>
  
  <div id="mainContent">
    <?php include(LOGIN . "login_header.php"); ?>
    <div class="freehand-h1"><div class="Yellow">Past Grand Officers</div></div>
    <div class="search">
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" > 
    <h4> Select Year: 
      <select id="year" name="year" requried>
        <option value = "0" <?php if($year == 0) echo "selected"; ?>> All</option>
        <?php for($i=$current_year; $i>1931; $i--){ ?>
            <option value = <?php echo '"' . $i .'"'; if($year == $i) echo "selected";?> ><?php echo  $i; ?></option>
        <?php } ?>
      </select>
      <br>
      Select Floor Office: 
      <select id="office1" name="office" requried>
        <option value = "0" <?php if($office == "0") echo "selected"; ?>> All</option>
        <?php foreach($grandOffices as $one){ ?>
            <option value = <?php echo '"' . $one["office"] .'"'; 
                                  if($office == $one["office"]) echo "selected";?> ><?php echo $one["office"]; ?>
            </option>
        <?php } ?>
      </select>
      <br>
      Select Assembly: 
      <select id="assembly" name="assembly" requried>
        <option value = "0" <?php if($assembly == "0") echo "selected"; ?>> All</option>
        <?php foreach($Assemblies as $one){ ?>
            <option value = <?php echo '"' . $one["num"] .'"'; 
                                  if($assembly == $one["num"]) 
                                      echo "selected";?> ><?php echo $one["name"] . " #" . $one["num"]; ?>
            </option>
        <?php } ?>
      </select>
      <br>Select Name:
          <input label="Select Name" type="text" name="s" value= "<?php if(isset($search_term)) {echo htmlspecialchars($search_term);} ?>" >

    <h4>

    <p><input type="submit" value="Search" id="submit"></p>
    <?php  if(count($grandOfficers) != 0) { ?>
    <?php include(INC . 'partial-pages.html.php'); ?>
       <?php } ?>
   </form> 
    </div>
    <div id="FullBorderTable">

    <?php  if(count($grandOfficers) != 0) { ?>
     <table>  
      <tr class="white">
      <th colspan="4">Grand Floor Officers</th> 
      </tr>
      <?php foreach($grandOfficers as $grandOfficer){ ?>
          <tr <?php if(intval($grandOfficer["year"])%2 == 0) echo 'class="shade"';
                    else echo 'class="white"'?> >
            <td >
                <?php echo $grandOfficer["year"]?>
            </td>
            <td >
                <?php echo $grandOfficer["office"]?>
            </td>
            <td > 
              <?php echo $grandOfficer["first_name"] . " "?>
              <?php if($grandOfficer["nickname"]) echo '"' . $grandOfficer["nickname"]  . '" '?>
              <?php echo substr($grandOfficer["last_name"],0,1) . "."?>
            </td>
            <td >
                <?php echo $grandOfficer["name"] . " #" . $grandOfficer["assembly"]?>
            </td>
          </tr>
      <?php } ?>
    </table>
   <?php } ?>
   </div>

   </div> <!-- end #mainContent -->
  

<?php 
  include( INC . 'footer.php');
 ?>
