<?php
    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");
    require_once(INC . 'Info.php');
    $pageType   = "GWA";
   if(isset($_GET["y"])){
     $dec = intval($_GET["y"]);
   }
     echo '<script>';
     echo 'console.log('. json_encode($dec) .')';
     echo '</script>';

   if(empty($dec)){
	   header("Location: " . BASE_URL . "index.php");
   }
   $pageSubType = $dec;

   for ($i = 0; $i < 10; $i++) {
    $gwa[$i] = get_gwa_info($dec + $i);
    $gwa[$i]["name"] = $gwa[$i]["first_name"] . " ";
    if($gwa[$i]["middle_name"]) $gwa[$i]["name"] .= $gwa[$i]["middle_name"] . " ";
    $gwa[$i]["name"] .= $gwa[$i]["last_name"];
    $gwa[$i]["pic"] = BASE_URL . "images/GWA Photos/" . $gwa[$i]["number"] . " " . $gwa[$i]["name"] . ".jpg";
    if (empty($gwa[$i]["first_name"]))  $gwa[$i]["pic"] = BASE_URL . "images/GWA Photos/GWABlank.gif";
   }


   include(INC . 'header.php');
          echo '<script>';
                  echo 'console.log('. json_encode($dec) .')';
                  echo '</script>';
   include(INC . 'sidebar.php');

   require_once(INC . 'Info.php');

  ?>

     <script>
         console.log(<?= json_encode($dec); ?>);
         console.log(<?= json_encode($gwa); ?>);
     </script>

  <div id="mainContent">

    <div id="GWAHeadPic">
  	  <table  border="0">
      </table></div>

    <div id="ClearFiveColumnTable">
    <table width="760" >
      <tr>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="20" alt="" />
             </div>
         </td>
         <td>
          <td>
           <div id="<?php echo empty($gwa[9]["first_name"]) ? 'GWABlankPic' : 'GWAHeadPic'?>" align="center">
             <a href="<?php echo BASE_URL . "GWA?y=" . ($dec + 9);?>"> <img src="<?php echo $gwa[9]["pic"]?>" width="140" alt="GWA"/>
             <div id="GWATitles"><?php echo $gwa[9]["name"]?><br><?php echo empty($gwa[9]["first_name"]) ? '' : ($dec + 8) . "-" . ($dec + 9)?></div></a>
           </div>
          </td>
          </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="100" alt="" />
             </div>
         </td>
        <td>
           <div id="<?php echo empty($gwa[8]["first_name"]) ? 'GWABlankPic' : 'GWAHeadPic'?>" align="center">
             <a href="<?php echo BASE_URL . "GWA?y=" . ($dec + 8);?>"> <img src="<?php echo $gwa[8]["pic"]?>" width="140" alt="GWA"/>
             <div id="GWATitles"><?php echo $gwa[8]["name"]?><br><?php echo empty($gwa[8]["first_name"]) ? '' : ($dec + 7) . "-" . ($dec + 8)?></div></a>
           </div>
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="100" alt="" />
             </div>
         </td>
         <td>
           <div id="<?php echo empty($gwa[7]["first_name"]) ? 'GWABlankPic' : 'GWAHeadPic'?>" align="center">
             <a href="<?php echo BASE_URL . "GWA?y=" . ($dec + 7);?>"> <img src="<?php echo $gwa[7]["pic"]?>" width="140" alt="GWA"/>
             <div id="GWATitles"><?php echo $gwa[7]["name"]?><br><?php echo empty($gwa[7]["first_name"]) ? '' : ($dec + 6) . "-" . ($dec + 7)?></div></a>
           </div>
         </td>
         <td>
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="20" alt="" />
         </td>
      </tr>
      </table>

    <table width="760" >
    <tr>  <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" height="30" alt="" /></tr>
         <tr>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="140" alt="" />
             </div>
         </td>
          <td>
           <div id="<?php echo empty($gwa[6]["first_name"]) ? 'GWABlankPic' : 'GWAHeadPic'?>" align="center">
             <a href="<?php echo BASE_URL . "GWA?y=" . ($dec + 6);?>"> <img src="<?php echo $gwa[6]["pic"]?>" width="140" alt="GWA"/>
             <div id="GWATitles"><?php echo $gwa[6]["name"]?><br><?php echo empty($gwa[6]["first_name"]) ? '' : ($dec + 5) . "-" . ($dec + 6)?></div></a>
           </div>
          </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="140" alt="" />
             </div>
         </td>
         <td >
           <div id="<?php echo empty($gwa[5]["first_name"]) ? 'GWABlankPic' : 'GWAHeadPic'?>" align="center">
             <a href="<?php echo BASE_URL . "GWA?y=" . ($dec + 5);?>"> <img src="<?php echo $gwa[5]["pic"]?>" width="140" alt="GWA"/>
             <div id="GWATitles"><?php echo $gwa[5]["name"]?><br><?php echo empty($gwa[5]["first_name"]) ? '' : ($dec + 4) . "-" . ($dec + 5)?></div></a>
           </div>
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="140" alt="" />
             </div>
         </td>

      </tr>


     </table>

    <table width="760" >
      <tr>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="20" alt="" />
             </div>
         </td>
         <td >
           <div id="<?php echo empty($gwa[4]["first_name"]) ? 'GWABlankPic' : 'GWAHeadPic'?>" align="center">
             <a href="<?php echo BASE_URL . "GWA?y=" . ($dec + 4);?>"> <img src="<?php echo $gwa[4]["pic"]?>" width="140" alt="GWA"/>
             <div id="GWATitles"><?php echo $gwa[4]["name"]?><br><?php echo empty($gwa[4]["first_name"]) ? '' : ($dec + 3) . "-" . ($dec + 4)?></div></a>
           </div>
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="100" alt="" />
             </div>
         </td>
        <td>
           <div id="<?php echo empty($gwa[3]["first_name"]) ? 'GWABlankPic' : 'GWAHeadPic'?>" align="center">
             <a href="<?php echo BASE_URL . "GWA?y=" . ($dec + 3);?>"> <img src="<?php echo $gwa[3]["pic"]?>" width="140" alt="GWA"/>
             <div id="GWATitles"><?php echo $gwa[3]["name"]?><br><?php echo empty($gwa[3]["first_name"]) ? '' : ($dec + 2) . "-" . ($dec + 3)?></div></a>
           </div>
        </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="100" alt="" />
             </div>
         </td>
        <td>
           <div id="<?php echo empty($gwa[2]["first_name"]) ? 'GWABlankPic' : 'GWAHeadPic'?>" align="center">
             <a href="<?php echo BASE_URL . "GWA?y=" . ($dec + 2);?>"> <img src="<?php echo $gwa[2]["pic"]?>" width="140" alt="GWA"/>
             <div id="GWATitles"><?php echo $gwa[2]["name"]?><br><?php echo empty($gwa[2]["first_name"]) ? '' : ($dec + 1) . "-" . ($dec + 2)?></div></a>
           </div>
         </td>
         <td>
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="20" alt="" />
         </td>
      </tr>
      </table>
      <table width="760" >
        <tr>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="140" alt="" />
             </div>
         </td>
         <td >
           <div id="<?php echo empty($gwa[1]["first_name"]) ? 'GWABlankPic' : 'GWAHeadPic'?>" align="center">
             <a href="<?php echo BASE_URL . "GWA?y=" . ($dec + 1);?>"> <img src="<?php echo $gwa[1]["pic"]?>" width="140" alt="GWA"/>
             <div id="GWATitles"><?php echo $gwa[1]["name"]?><br><?php echo empty($gwa[1]["first_name"]) ? '' : ($dec) . "-" . ($dec + 1)?></div></a>
           </div>
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="100" alt="" />
             </div>
         </td>
        <td>
           <div id="<?php echo empty($gwa[0]["first_name"]) ? 'GWABlankPic' : 'GWAHeadPic'?>" align="center">
             <a href="<?php echo BASE_URL . "GWA?y=" . ($dec);?>"> <img src="<?php echo $gwa[0]["pic"]?>" width="140" alt="GWA"/>
             <div id="GWATitles"><?php echo $gwa[0]["name"]?><br><?php echo empty($gwa[0]["first_name"]) ? '' : ($dec - 1) . "-" . ($dec + 0)?></div></a>
           </div>
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="140" alt="" />
             </div>
         </td>

      </tr>


     </table>

    <!-- end #ClearFiveColumnTable --></div>
<div class="mozilla"></div>
<div class="mozilla"></div>
<div class="mozilla"></div>
<div class="mozilla"></div>
<div class="mozilla"></div>

  <!-- end #mainContent --></div>


 <?php
  include( INC . 'footer.php');
 ?>
