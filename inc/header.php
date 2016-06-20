<?php
    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require_once( INC . 'Info.php');
?>
<!DOCTYPE php PUBLIC "-//W3C//DTD Xhtml 1.0 Transitional//EN" "http://www.w3.org/TR/xphp1/DTD/xhtml1-transitional.dtd">
<php xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->

<?php
   $ga_date = get_ga_date();
   $date = "'" . $ga_date["date"] . ', ' . $ga_date["end"] . ' ' . $ga_date["time"]. "'";
   $year = "'" . $ga_date["end"] . "'";
   $load = '"javascript:countdown(' . $date . ',' . $year . ');"';
?>

<?php if($pageType == "Home"){?>
  <title>New Mexico: International Order of the Rainbow for Girls</title>
<?php } ?>
<?php if($pageType == "GWA"){?>
  <title>New Mexico: IORG Grand Worthy Advisors</title>
<?php } ?>
<?php if($pageType == "GO"){?>
  <title>New Mexico: IORG Grand Officers</title>
<?php } ?>
<?php if($pageType == "SI"){?>
  <title>New Mexico: IORG Supreme</title>
<?php } ?>
<?php if($pageType == "GA"){?>
  <title>New Mexico: IORG Grand Assembly</title>
<?php } ?>
<?php if($pageType == "Assemblies"){?>
  <title>New Mexico: IORG Local Assemblies</title>
<?php } ?>
<?php if($pageType == "Foundation"){?>
  <title>New Mexico: Rainbow Girls Foundation</title>
<?php } ?>
<?php if($pageType == "Contact"){?>
  <title>New Mexico: IORG Contact Information</title>
<?php } ?>
<?php if($pageType == "import"){?>
  <title>New Mexico: IORG Import</title>
<?php } ?>
  
<?php if($bootstrap_inc == "true"){?>
  <link href="<?php echo BASE_URL;?>css/bootstrap.css" type="text/css" rel="stylesheet" media="screen" title="no title" charset="utf-8">
  <link href="<?php echo BASE_URL;?>css/bootstrap.icon-large.min.css" rel="stylesheet" type="text/css" >
  <link href="<?php echo BASE_URL;?>tables/tables.css" type="text/css" media="screen" rel="stylesheet"  title="no title" charset="utf-8">
<?php } ?>

<link rel="icon" href="<?php echo BASE_URL;?>images/graphics/emblemicon.jpg">
<link href="<?php echo BASE_URL;?>fonts/MyFontsWebfontsKit.css"; rel="stylesheet" type="text/css" >
<link href="<?php echo BASE_URL;?>inc/styles.css"; rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL;?>inc/form.css"; rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_URL;?>inc/animate.css"; rel="stylesheet" type="text/css" />
<!--[if lte IE 9]>
  <link href="<?php echo BASE_URL;?>inc/styles_ie9.css"; rel="stylesheet" type="text/css" />
<![endif]-->

<meta name="viewport" content="width=device-width">

	<!-- jQuery (required) -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
<!-- Anything Slider -->
  <link rel="stylesheet" href="<?php echo BASE_URL;?>css/anythingslider.css">
  <link rel="stylesheet" href="<?php echo BASE_URL;?>css/theme-minimalist-round.css">
  <script src= "<?php echo BASE_URL;?>js/jquery.anythingslider.js"></script>
    

  <!-- AnythingSlider initialization -->
  <script>
    // DOM Ready
    $(function(){
      $('#slider').anythingSlider({
        theme           : 'minimalist-round',
        easing          : 'easeInOutBack',
        navigationFormatter : function(index, panel){
                            return ['What is Rainbow?', 'History', 'Who Can Join?', 
                                    'How do I Join?'][index - 1];
        }
      });
     $('#sliderGA').anythingSlider({
        theme           : 'minimalist-round',
        easing          : 'easeInOutBack',
        navigationFormatter : function(index, panel){
                            return ['Grand Assembly', 'Schedule Mon-Tues', 'Schedule Wed', 
                      'Schedule Thurs','Schedule Fri-Sat','Sunshine Service', 
                  'Competitions 1','Competitions 2'][index - 1];
       }
      });
     $('#sliderSSG').anythingSlider({
        theme           : 'minimalist-round',
        easing          : 'easeInOutBack',
        navigationFormatter : function(index, panel){
                            return ['Cover', 'Page 2', 'Page 3', 'Page 4','Page 5',
                      'Page 6','Page 7','Page 8', 'Page 9','Page 10','Page 11','Page 12',
                      'Page 13','Page 14'][index - 1];
       }
      });
    });

  </script>

	
</head>
<body class="twoColElsLtHdr" <?php if($pageSubType == "GACount"){
	                        echo 'OnLoad=' . $load; }?> >
 
<div id="container">

  <div id="header">
    <!--[if lte IE 9 ]>
      Support for Internet Explorer 9 or below is limited.
    <![endif]-->

  
    <div id="HeaderImage"><img src= "<?php echo BASE_URL;?>images/index_01.jpg" 
                           alt="Rainbow Girls Header Image" width="960" height="137" /></div>
     <div class="fltlft"><img src="<?php echo BASE_URL;?>images/index_02.gif" 
                          alt="Spacer" border="0" /></div>

   <div class="fltlft"><a href="<?php echo BASE_URL;?>" class="homeButton"></a></div>  
   <div class="fltlft"><a href="<?php echo BASE_URL;?>GWA?y=<?php echo get_ending_year(); ?>"
                                                                        class="GWAButton"></a></div>
   <div class="fltlft"><a href="<?php echo BASE_URL;?>GrandOfficers"    class="GOButton"></a></div>
   <div class="fltlft"><a href="<?php echo BASE_URL;?>SupremeDeputy" class="SIButton"></a></div>
   <div class="fltlft"><a href="<?php echo BASE_URL;?>GrandAssembly/"   class="GAButton"></a></div>
   <div class="fltlft"><a href="<?php echo BASE_URL;?>LocalAssemblies" 
                                                                  class="AssemButton"></a></div>
   <div class="fltlft"><a href="<?php echo BASE_URL;?>Foundation" class="FoundButton"></a></div>
   <div class="fltlft"><a href="<?php echo BASE_URL;?>Contact"    class="ContactButton"></a></div>
   
      <div class="fb-wrap"><a href='http://www.facebook.com/groups/227617923946860'><div class="fb"></div></a></div>
   <!-- <div><img src="<?php echo BASE_URL;?>images/index_11.jpg" alt="Spacer" />
     </div>
   <div><img src="<?php echo BASE_URL;?>images/index_11.gif" alt="Spacer" /></div>-->

    <div id="redHeader">
    <table width="960"> <tr>
        <?php if($pageType == "Home"){?>
                <?php if($mainPage) { ?>
                    <td> <a href='<?php echo BASE_URL;?>Login'>Login</a></td>
                <?php } ?>
                  <td> <a href='<?php echo BASE_URL;?>JoinRainbow'>What is </br>Rainbow?</a></td>
                  <td><a href='<?php echo BASE_URL;?>Calendar'>Calendar</a></td>
                  <td><a href='<?php echo BASE_URL;?>SunsetGazette'>Sunset Gazette</a></td>
                  <td><a href='<?php echo BASE_URL;?>Alumni'>Alumni</a></td>
                  <td><div class="fb-m-wrap"><a href='http://www.facebook.com/groups/227617923946860'><div class="fb-m"></div></a></div></td>
          <?php }?>
          <?php if($pageType == "GWA"){?>
                      <td><a href="<?php echo BASE_URL;?>GWA/2010s">2010 - <?php echo get_ending_year(); ?></a></td>
                      <td><a href="<?php echo BASE_URL;?>GWA/2000s">2000 - 2009</a></td>
                      <td><a href="<?php echo BASE_URL;?>GWA/1990s">1990 - 1999</a></td>
                      <td><a href="<?php echo BASE_URL;?>GWA/1980s">1980 - 1989</a></td>
                  </tr></table>
                  <table width="960"> <tr>
                      <td><a href="<?php echo BASE_URL;?>GWA/1970s">1970 - 1979</a></td>
                      <td><a href="<?php echo BASE_URL;?>GWA/1960s">1960 - 1969</a></td>
                      <td><a href="<?php echo BASE_URL;?>GWA/1950s">1950 - 1959</a></td>
                      <td><a href="<?php echo BASE_URL;?>GWA/1940s">1940 - 1949</a></td>
                      <td><a href="<?php echo BASE_URL;?>GWA/1930s">1933 - 1939</a></td>
                  <!--</tr></table>
                  <br />
                  <table width="960"> <tr>
                  <td> <a href="GWA2014_SerinaPack.php">Serina Pack<br> 2013 - 2014</a></td>
                  <td><a href="GWA2013_ArianaCollins.php">Ariana Collins<br> 2012 - 2013</a></td>
                  <td> <a href="GWA2012_CorrineWurst">Corrine Wurst<br> 2011-2012</a></td>
                  <td> <a href="GWA2011_LaurenDeveraux">Lauren Deveraux<br> 2010-2011</a></td>
                  <td> <a href="GWA2010_BrinannaSchmittal">Brianna Schmittal<br> 2009-2010</a></td>
                  -->
          <?php }?>

          <?php if($pageType == "GO"){?>
                  <td><a href="<?php echo BASE_URL;?>GrandOfficers">Grand Officers</a></td>
                  <td><a href="<?php echo BASE_URL;?>GrandRepresentatives">Grand Representatives</a></td>
                  <td> <a href="<?php echo BASE_URL;?>JuniorExecs">Junior Executives</a></td>
                  <td> <a href="<?php echo BASE_URL;?>PastGrandOfficers">Past Grand Officers</a></td>
          <?php }?>
          <?php if($pageType == "SI"){?>
                  <td><a href="<?php echo BASE_URL;?>SupremeDeputy">Supreme Deputy</a></td>
                  <td><a href="<?php echo BASE_URL;?>PastSupremeInspector">Past Supreme Inspector</a></td>
           <?php }?>
          <?php if($pageType == "GA"){?>
                  <td><a href="<?php echo BASE_URL;?>GrandAssembly">Grand Assembly</a></td>
                  <td><a href="<?php echo BASE_URL;?>GrandAssembly/Executives">Grand Executives</a></td>
                  <td><a href="<?php echo BASE_URL;?>GrandAssembly/Deputies">Grand Deputies</a></td>
                  <td><a href="<?php echo BASE_URL;?>GrandAssembly/Registration">Registration</a></td>
          <?php }?>
         <?php if($pageType == "Assemblies"){?>
                  <td><a href="<?php echo BASE_URL;?>LocalAssemblies">Current Assemblies</a></td>
                  <td><a href="<?php echo BASE_URL;?>LocalAssemblies/Historical">Historical Assemblies</a></td>
          <?php }?>
          <?php if($pageType == "Foundation"){?>
                  <td><a href="<?php echo BASE_URL;?>Foundation">Foundation</a></td>
                  <td><a href="<?php echo BASE_URL;?>Foundation/Donation">Donation <br>Form</a></td>
                  <td><a href="<?php echo BASE_URL;?>Foundation/Scholarship">Scholarship <br>Application</a></td>
                  <td><a href="<?php echo BASE_URL;?>Foundation/Board">Foundation <br>Board</a></td>
          <?php }?>
    </tr></table>
     </div>
  <!-- end #header --></div>

