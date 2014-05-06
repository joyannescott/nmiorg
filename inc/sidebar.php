<?php
  require_once( INC . 'Info.php');

  if($pageType == "GWA") {
    $start = $pageSubType;
    $end = floor($start/10)*10 + 9;

	if($end > intval(date('Y'))) {
      $end = intval(date('Y'));
	}
    $gwaRange = get_gwa_info_range($start, $end);
  }
?>

<div class="wrapper">
  <div id="sidebar">
    <ul class="nav">
      <?php if($pageType == "GWA"){ ?>
           <div id="GWATitle">Grand Worthy Advisors </div>
               <?php for($decade = floor(intval(date('Y'))/10) * 10; 
                  $decade >= 1930; 
                  $decade -=10){ ?>
                  <?php $end_decade = $decade + 9;?>
                  <?php if($decade == 1930) $decade = 1933; ?>
                  <li id="GWADate">
                    <a href="<?php echo BASE_URL . 'GWA/' . floor($decade/10)*10 . 's';?>">
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
    <p>&nbsp;</p>

     <?php if($pageType == "Home"){?>

        <li><p><a id="sideBarItem" href='/'>Home</a></p></li>
        <li><p><a id="sideBarItem" href='/JoinRainbow'>What is Rainbow?</a></p></li>
        <li><p><a id="sideBarItem" href='/Calendar'>Calendar</a></p></li>
        <li><p><a id="sideBarItem" href='/SunsetGazette'>Sunset Gazette</a></p></li>
        <li><p><a id="sideBarItem" href='/Alumni'>Alumni</a></p></li>

      <?php } ?>
      <?php if($pageType == "GO"){ ?>
              <li><p><a id="sideBarItem" href="/GrandOfficers">Grand Officers</a></p></li>
              <li><p><a id="sideBarItem" href="/JuniorExecs">Junior Executives</a></p></li>
              <li><p><a id="multiline" href="/GrandRepresentatives">Grand Representatives</a></p></li>
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
              <ul id="GAItems">
                <li>
                  <a class="GASchedule" href="http://www.nmiorg.org/GrandAssembly/#&panel1-2">Schedule</a>
                </li>
                <li> 
                  <a class="GASSS"href="<?php echo BASE_URL;?>GrandAssembly/#&panel1-6">Sunshine Service</a>
                </li> 
                <li>
                <a class="GACompetitions"href="<?php echo BASE_URL;?>GrandAssembly/#&panel1-7"> 
                                    Competitions</a> 
                </li>
               </ul>
             <li>
                <p><a id="sideBarItem" href="/GrandAssembly/Registration">Registration</a></p>
            </li>

      <?php } ?>
      <?php if($pageType == "Foundation"){ ?>
              <li ><p><a id="sideBarItem" href="/Foundation">Foundation</a></p></li>
              <li ><p><a id="sideBarItem" href="/Foundation/Donation">Donation Form</a></p></li>
              <li ><p><a id="multiline"   href="/Foundation/Scholarship">Scholarship Application</a></p></li>
              <li ><p><a id="sideBarItem" href="/Foundation/Board">Foundation Board</a></p></li>
      <?php } ?>
      <?php } ?>
      </ul> <!-- nav -->
     <div class="iorg">
  	  <p align="center"><a href="http://www.gorainbow.org/"><img src="<?php echo BASE_URL;?>images/icon.gif" alt="star" width="107" 
         height="111" border="0" /></a><br />
       <a href="http://www.gorainbow.org/">Visit Our <br /> International Website</a><p/>          
    </div>
  
   <p>&nbsp;</p>
  </div>