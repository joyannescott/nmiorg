<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require_once( INC . "database.php");

   $pageType = "Assemblies";
   $bootstrap_inc = "true";
   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent">
  <?php include(LOGIN . "login_header.php"); ?>
  	<h1 align=left style="margin-right:150px"><img src="<?php echo BASE_URL;?>images/Assemblies.gif"  
        alt="local assemblies" /></h1>
    <div id="FullBorderTable">
    <table >
      <tr>
        <td height="54"><u><font size="+1"> <em>Assembly</em></font></u></td>
        <td><u><font size="+1"><em>Location</em></font></u></td>
        <td><u><font size="+1"><em>Mother Advisor</em></font></u></td>
      </tr>
      <tr>
        <td width="193" height="55"><i>Tucumcari #4</i><br />        </td>
        <td width="187">Fort Sumner</td>
        <td width="223"><a href="mailto:rmmcclain@swwmail.net">Mrs. Mary McClain</a><a href="mailto:rmcclain@swwmail.net"></a></td>
      </tr>
      <tr>
        <td height="57"><i>Clovis #8</i></td>
        <td>Fort Sumner</td>
        <td><a href="mailto:rmmcclain@swwmail.net">Mrs. Mary McClain</a><a href="mailto:rmcclain@swwmail.net"></a></td>
      </tr>
      <tr>
        <td height="58"><i>Alamogordo #18</i></td>
        <td>Alamogordo</td>
        <td><a href="mailto:epperson313@gmail.com ">Mrs. Carol Epperson</a></td>
      </tr>
      <tr>
        <td height="36"><i>Farmington #35</i></td>
        <td>Farmington</td>
        <td><a href="mailto:sboyles@fms.k12.nm.us">Mrs. Susan Boyles</a></td>
      </tr>
      <tr>
        <td height="52"><i>Ruth Laws #55<br />
        </i></td>
        <td>Las Cruces</td>
        <td><a href="mailto:nicky.phillips@ymail.com">Mrs. Nicky Phillips</a></td>
      </tr>
      <tr>
        <td height="33"><i>Ashlar #58</i></td>
        <td>Albuquerque</td>
        <td><a href="mailto:AshlarRainbowABQ@hotmail.com">Mrs. Patty Campbell</a></td>
      </tr>
      <tr>
        <td height="52"><i>Dorothy Pitsford #60<br />
        </i></td>
        <td>Estancia</td>
        <td><a href="mailto:tjautosupply@qwestoffice.net">Mrs. Jaci Crosswhite</a></td>
      </tr>
      <tr>
        <td height="41"><i>Rio Rancho #61</i></td>
        <td>Rio Rancho</td>
        <td><a href="mailto:rioranchorainbow@gmail.com">Mrs. Christine Wurst</a></td>
      </tr>
      <tr>
        <td  height="41"><i>Copper Rose #62</i></td>
        <td>Silver City</td>
        <td><a href="mailto:sabrina@silvercityradio.com">Mrs. Sabrina Pack</a></td>
      </tr>
    </table>
    </div>
    
    <p align="center">(To contact the Mother Advisor click on their name)</p>
    <!-- end #mainContent -->
    </div>
  <?php 
  include( INC . 'footer.php');
 ?>
