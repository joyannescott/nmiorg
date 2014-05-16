<?php 
   require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
   require( INC . "database.php");

   $pageType   = "GA";

   include( INC . 'header.php');
   include( INC . 'sidebar.php');
  ?>

  <div id="mainContent">
  <?php include(LOGIN . "login_header.php"); ?>
    <h1>Grand Assembly Registration 2014</h1>
    <div id="reglist"> 
    <ol list-style: decimal; class="Registration">

       <li> General Information 
        <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/01_2014_General_Information.doc">  Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/01_2014_General_Information.pdf"> PDF Document</a></li>
        </ul></li>
        <li> Competitions 
        <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/02_2014_Competition_Form.doc"> Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/02_2014_Competition_Form.pdf"> PDF Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/02_2014_Ritual_Competition_Form.pdf"> Ritual PDF Document</a></li>
        </ul></li>
        <li> Schedule 
            <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/03_2014_Schedule.doc">  Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/03_2014_Schedule.pdf"> PDF Document</a></li>
        </ul></li>
        <li> Youth Protection and Sunshine Service Information and Wavier
        <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/04_2014_SSS_YP_Info_&_Waiver_Form.doc">  Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/04_2014_SSS_YP_Info_&_Waiver_Form.pdf"> PDF Document</a></li>
        </ul></li>
        <li> Grand Assembly Registration Instructions
        <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/05_2014_GA_Registration_Instructions.doc">  Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/05_2014_GA_Registration_Instructions.pdf"> PDF Document</a></li>
        </ul></li>
        <li> Grand Assembly Registration Form
        <ul class="regItem">
        	<li> <a class="excelDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/06_2014_GA_Registration_Form.xls">  Excel Document</a>
                 - Fill out electronically </li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/06_2014_GA_Registration_Form.pdf"> PDF Document</a>
                 - Print and fill out by hand</li>
        </ul></li>
        <li> Hotel Information and Reservation Form
        <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/07_2014_Hotel_Info_&_Reservation_Form.doc">  Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/07_2014_Hotel_Info_&_Reservation_Form.pdf"> PDF Document</a></li>
        </ul></li>
         <li> Girl Permission Form 
       <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/08_2014_Girl_Permission_Form.doc">  Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/08_2014_Girl_Permission_Form.pdf"> PDF Document</a></li>
        </ul></li>
        <li> Adult Permission Form 
            <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/09_2014_Adult_Permission_Form.doc">  Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/09_2014_Adult_Permission_Form.pdf"> PDF Document</a></li>
        </ul></li>
        <li> Media and Image Release Form 
            <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/10_2014_Media_&_Image_Release_Form.doc">  Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/10_2014_Media_&_Image_Release_Form.pdf"> PDF Document</a></li>
        </ul></li>
        <li> Photo Order Form 
            <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/11_2014_Photo_Order_Form.doc">  Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/11_2014_Photo_Order_Form.pdf"> PDF Document</a></li>
        </ul></li>
        <li> Letter for Out-of-State Guests
            <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/12_2014_Letter_for_Out_of_State_Guests.doc">  Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/12_2014_Letter_for_Out_of_State_Guests.pdf"> PDF Document</a></li>
        </ul></li>
        <li> Ground Transportation Form
            <ul class="regItem">
        	<li> <a class="wordDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/13_2014_Ground_Transportation_Form.doc">  Word Document</a></li>
            <li> <a class="pdfDoc" href="<?php echo BASE_URL;?>images/Graphics/GA2014/13_2014_Ground_Transportation_Form.pdf"> PDF Document</a></li>
        </ul></li>

    </ol>  
</div>
  </div>
<?php 
  include( INC . 'footer.php');
 ?>
 
