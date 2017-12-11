<?php
  require_once( INC . 'Info.php');

  require_once(TABLE . "entries.php");

  if($pageType == "GWA") {
    $start = $pageSubType;
    $end = floor($start/10)*10 + 9;

	  if($end > get_ending_year()) {
        $end = get_ending_year();
	  }
    $gwaRange = get_gwa_info_range($start, $end);
  }
?>

<div class="wrapper">
  <?php if($no_sidebar){?>
      <div id="no-sidebar">
  <?php } else { ?>
      <div id="sidebar">
      <div class="sidebar-flex">
       <div class="sidebar-nav">
  <?php } ?>
    <ul class="nav">
      <?php if($pageType == "GWA"){ ?>
           <div id="GWATitle">Grand Worthy Advisors </div>
               <?php for($decade = floor(intval(date('Y'))/10) * 10; 
                  $decade >= 1930; 
                  $decade -=10){ ?>
                  <?php $end_decade = $decade + 9;?>
                  <?php if($decade == 1930) $decade = 1933; ?>
                  <li id="GWADate">
                    <a href="<?php echo BASE_URL . 'GWA/Decades/?y=' . floor($decade/10)*10;?>">
                       <?php echo $decade . " &ndash; " . $end_decade; ?></a>
                  </li>
                    <?php if($pageSubType == $decade){ ?>
                        <ul id="GWAName">
                          <?php foreach($gwaRange as $gwaOne) { ?>
                            <?php if(does_term_info_exist($gwaOne["year"])) { ?>
                              <li>
                                <a href="<?php echo BASE_URL . "GWA?y=" . $gwaOne["year"] ?>"> 
                                    <?php echo $gwaOne["first_name"] . " " .$gwaOne["last_name"]; ?><br> 
                                    <?php echo $gwaOne["install_year"] . " &ndash; " .
                                               $gwaOne["year"]; ?></a>
                              </li>
                            <?php } else { ?>
                              <li id="GWANoLink">
                                <?php echo $gwaOne["first_name"] . " " . $gwaOne["last_name"]; ?><br> 
                                <?php echo $gwaOne["install_year"] . " &ndash; " .
                                           $gwaOne["year"]; ?>
                              </li>
                            <?php } //does_exist ?>
                          <?php } //foreach ?>
                        </ul>   
                     <?php } //SubType ?>
                <?php } //for ?>
    <?php } else { //Else !GWA?>


     <?php if($pageType == "Home"){?>

        <li><p><a id="sideBarItem" href='/'>Home</a></p></li>
        <li><p><a id="sideBarItem" href='/JoinRainbow'>What is Rainbow?</a></p></li>
        <li><p><a id="sideBarItem" href='/Calendar'>Calendar</a></p></li>
        <li><p><a id="sideBarItem" href='/SunsetGazette'>Sunset Gazette</a></p></li>
        <li><p><a id="sideBarItem" href='/Alumni'>Alumni</a></p></li>
        <?php  if(!empty($_SESSION['user']) && is_administrator($_SESSION['user']['email'])) { ?>
            <li><p><a id="sideBarItem" href='/Import'>Administrator</a></p></li>
        <?php } ?>
      <?php } ?>
     <?php if($pageType == "Join"){?>

        <li><p><a id="sideBarItem_bs" href='/JoinRainbow'>What is Rainbow?</a></p></li>
        <li><p><a id="sideBarItem_bs" href='/JoinRainbow/Why'>What can Rainbow do for me?</a></p></li>
        <li><p><a id="sideBarItem_bs" href='/JoinRainbow/Fun'>What type of Activities?</a></p></li>
        <li><p><a id="sideBarItem_bs" href='/JoinRainbow/How'>How do I Join?</a></p></li>
     <?php } ?>
      <?php if($pageType == "GO"){ ?>
              <li><p><a id="sideBarItem" href="/GrandOfficers">Grand Officers</a></p></li>
              <li><p><a id="sideBarItem" href="/JuniorExecs">Junior Executives</a></p></li>
              <li><p><a id="multiline" href="/GrandRepresentatives">Grand Representatives</a></p></li>
              <li><p><a id="multiline" href="/PastGrandOfficers">Past Grand Officers</a></p></li>
      <?php } ?>
      <?php if($pageType == "SI"){ ?>
              <li><p><a id="sideBarItem" href="/SupremeDeputy">Supreme Deputy</a></p></li>
              <li><p><a id="multiline" href="/PastSupremeInspector">Past Supreme Inspector</a></p></li>
       <?php } ?>
      <?php if($pageType == "GA"){ ?>
              <li>
                <p><a id="sideBarItem" href="/GrandAssembly/Executives">Grand Executives</a></p>
              </li>
              <li>
                <p><a id="sideBarItem" href="/GrandAssembly/Deputies">Grand Deputies</a></p>
              </li>
              <li>
                <p><a id="sideBarItem" href="/GrandAssembly">Grand Assembly</a></p>
              </li>
              <?php if($pageSubType != "GDep" && $pageSubType != "GExec"){ ?>
              <ul id="GAItems">
                <li>
                  <a class="GASchedule" href="/GrandAssembly/Gallery">2014 Gallery</a>
                </li>
                <li>
                  <a class="GASchedule" href="/GrandAssembly/Schedule">2014 Schedule</a>
                </li>
                <!-- <li> 
                  <a class="GASSS"href="<?php //echo BASE_URL;?>GrandAssembly/#&panel1-6">Sunshine Service</a>
                </li> 
                <li>
                <a class="GACompetitions"href="<?php //echo BASE_URL;?>GrandAssembly/#&panel1-7"> 
                                    Competitions</a> 
                </li> -->
               </ul>
                <?php } ?>
             <li>
                <p><a id="sideBarItem" href="/GrandAssembly/Registration">Registration</a></p>
            </li>
            <?php  if(!empty($_SESSION['user']) && (is_administrator($_SESSION['user']['email']) ||
                                                    is_mother_advisor($_SESSION['user']['email']))) { ?>
              <li>
                  <p><a id="sideBarItem" href="/GrandAssembly/Ritual">Ritual Reg</a></p>
              </li>
            <?php } ?>
      <?php } ?>
      <?php if($pageType == "Foundation"){ ?>
              <li ><p><a id="sideBarItem" href="/Foundation">Foundation</a></p></li>
              <li ><p><a id="sideBarItem" href="/Foundation/Donation">Donation Form</a></p></li>
              <li ><p><a id="multiline"   href="/Foundation/Scholarship">Scholarship Application</a></p></li>
              <li ><p><a id="sideBarItem" href="/Foundation/Board">Foundation Board</a></p></li>
      <?php } ?>
      <?php if($pageType == "Assemblies"){ ?>
        <?php  if(!empty($_SESSION['user']) && (is_administrator ($_SESSION['user']['email']) ||
                                                is_mother_advisor($_SESSION['user']['email']))) { ?>
         <p>&nbsp;</p>
            <li><p><a id="sideBarItem_bs" href='/LocalAssemblies/Girls'>Assembly Reg</a></p></li>
            <li><p><a id="sideBarItem_bs" href='/GrandAssembly/Ritual'>Ritual Reg</a></p></li>
        <?php } ?>
         <p>&nbsp;</p>
         <li><p><a id="sideBarItem_bs" href='/LocalAssemblies'>Current</a></p></li>
         <p>&nbsp;</p>
         <li><p><a id="sideBarItem_bs" href='/LocalAssemblies/Historical'>Historical</a></p></li>
      <?php } ?>
      <?php if($pageType == "import"){ ?>
         <p>&nbsp;</p>
              <li ><p><a id="sideBarItem_bs" href="/Import">Import Data</a></p></li>
              <li ><p><a id="sideBarItem_bs"   href="/Import/Admin">Administrators</a></p></li>
              <li ><p><a id="sideBarItem_bs" href="/Import/MA">Mother Advisors</a></p></li>
              <li><p><a id="sideBarItem_bs" href='/Import/GA'>Grand Assembly</a></p></li>
              <li ><p><a id="sideBarItem_bs"   href="/Login/Users">Users</a></p></li>
      <?php } ?>
      <?php } ?>
      </ul> <!-- nav -->
      </div>
     <div class="iorg">
  	  <p align="center"><a href="http://www.gorainbow.org/"><img src="<?php echo BASE_URL;?>images/icon.gif" alt="star" width="107" 
         height="111" border="0" /></a><br />
       <a href="http://www.gorainbow.org/">Visit Our <br /> International Website</a><p/>          
    </div>

   </div>
  </div>