<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   $pageHeight = "GWAPicHeight";
   $pageType   = "GWA";
   $pageSubType = "2010";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
   require_once(INC . 'Info.php');
   

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
             <a href="<?php echo BASE_URL;?>GWA?y=2014"> <img src="<?php echo BASE_URL;?>images/GWA Photos/81 Serina Pack.jpg" alt="GWA"/>
             <div id="GWATitles"> Serina Pack<br>2013-2014</div></a>
           </div>
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="100" alt="" />
             </div>
         </td>
        <td>
           <div id="GWAHeadPic" align="center">
             <a href="<?php echo BASE_URL;?>GWA?y=2013"> <img src="<?php echo BASE_URL;?>images/GWA Photos/80 Ariana Collins.jpg"  alt="GWA"/>
             <div id="GWATitles">Ariana Collins <br>2012-2013</div></a>
             
           </div>
 
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="100" alt="" />
             </div>
         </td>
        <td>
           <div id="GWAHeadPic" align="center">
             <a href="<?php echo BASE_URL;?>GWA?y=2012"> <img src="<?php echo BASE_URL;?>images/GWA Photos/79 Corrine Wurst.jpg" alt="GWA"/>
             <div id="GWATitles">Corrine Wurst <br>2011-2012</div></a>
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
             <img src="<?php echo BASE_URL;?>images/GWA Photos/78 Lauren Deveraux.jpg" alt="GWA"/>
             <div id="GWATitles">Lauren Deveraux<br>2010-2011</div>
           </div>
         </td>
         <td>
             <div id="GWABlankPic">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/GWABlank.gif" width="100" alt="" />
             </div>
         </td>
        <td>
             <div id="GWAHeadPic" align="center">
             <img src="<?php echo BASE_URL;?>images/GWA Photos/77 Brianna Schmittal.jpg" alt="GWA"/>
             <div id="GWATitles">Brianna Schmittal <br>2009-2010</div>
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

  <!-- end #mainContent --></div>


 <?php 
  include( INC . 'footer.php');
 ?>

