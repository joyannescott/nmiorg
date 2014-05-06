    <!--end height--></div>
      <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div 
      to contain all child floats -->
      <br class="clearfloat" />
      <?php if($clearPlus) { ?>
      	      <br class='clearfloatPlus'/>
       <?php } ?>
          <div id='footer'>
          <?php if($mainPage) { ?>
                <div id='footerMain'>
                   <?php echo "&copy;" . date('Y'); ?>
                   New Mexico Rainbow Girls. All right reserved. <br>
                   This web site acknowledges allegiance to the Supreme Assembly,
                   International Order of the Rainbow for Girls, whose seat of authority is in McAlester, Oklahoma, USA; 
                   of which Rev. W. Mark Sexson was the founder; of which  Mary Adeline Bradford 
                   is the Supreme Worthy Advisor;
                   This web site follows all guidelines as set by Supreme Assembly 
                   Internet Guidelines. </div>
        <?php } else { ?>
          <div id='footerAll'>
          <?php echo "&copy;" . date('Y'); ?>
           New Mexico Rainbow Girls. All Rights Reserved.
           </div>
        <?php } ?>
    <!-- end #footer --></div>
 
  <!-- end #container --></div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/mainscript.js"></script>
</body>
</html>
