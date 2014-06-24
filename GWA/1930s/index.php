<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");
   $pageHeight = "GWAPicHeight";
   $pageType   = "GWA";
   $pageSubType = "1933";

   include(INC . 'header.php');
   include(INC . 'sidebar.php');
  ?>


  <div id="mainContent">
  
    <div id="GWAHeadPic">
  	  <table  border="0">
      </table></div>

    <div id="ClearFiveColumnTable">
    <table width="760" >
    <tr>  <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" height="30" alt="" /></tr>
       <tr>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="20" alt="" />
             </div>
         </td>
         <td >        
           <div id="GWAHeadPic" align="center">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/6 Lois Livingston.jpg" alt="GWA"/>
             <div id="GWATitles"> Lois Livingston<br>1938-1939</div>
           </div>
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="100" alt="" />
             </div>
         </td>
        <td>
           <div id="GWAHeadPic" align="center">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/5 Dixie Ray Boyd.jpg"  alt="GWA"/>
             <div id="GWATitles">Dixie Ray Boyd <br>1937-1938</div>
             
           </div>
 
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="100" alt="" />
             </div>
         </td>
        <td>
           <div id="GWAHeadPic" align="center">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/4 Marjorie White.jpg" alt="GWA"/>
             <div id="GWATitles">Marjorie White <br>1936-1947</div>
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
           <div id="GWAHeadPic" align="center">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/3 Dorothy Louise France.jpg" alt="GWA"/>
             <div id="GWATitles">Dorothy Louise France<br>1935-1936</div>
           </div>
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="100" alt="" />
             </div>
         </td>
        <td>
             <div id="GWAHeadPic" align="center">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/1_2 Chaney Miller Merritt.jpg" alt="GWA"/>
             <div id="GWATitles">Chaney Miller Merritt <br>1933-1935</div>
           </div>
 
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="140" alt="" />
             </div>
         </td>

      </tr>
     </table>


     </table>
  
    <!-- end #ClearFiveColumnTable --></div>

<div class="mozilla"></div>
<div class="mozilla"></div>
<div class="mozilla"></div>
<div class="mozilla"></div>
<div class="mozilla"></div>

  <!-- end #mainContent --></div>


 <?php 
  include(INC . 'footer.php');
 ?>

