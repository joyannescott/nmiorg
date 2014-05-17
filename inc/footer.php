    <!--wrapper--></div>
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
        <!--</div id="greyspace"> hello world<br></div>-->
    </div><!-- end #footer -->

  <!-- end #container --></div>


<script type="text/javascript"> var base_url = "<?php echo BASE_URL; ?>";</script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>js/mainscript.js"></script>

<!--<script src="http://code.jquery.com/jquery.js"></script> -->
<script type="text/javascript" language="javascript" src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo BASE_URL; ?>js/underscore.js"></script>
</body>
</html>
