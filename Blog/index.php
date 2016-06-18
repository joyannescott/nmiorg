<?php
    require($_SERVER["DOCUMENT_ROOT"] . "/inc/defines.php");
    require( INC . "database.php");
    require_once(INC . 'Info.php');

    $pageType = "Home";
    $mainPage  = true;

    include(INC . 'header.php');
    include(INC . 'sidebar.php');
?>
<div id="mainContent" class="blogHeader">
  <?php include(LOGIN . "login_header.php"); ?>
  <iframe width=100% height="800" src="../wp" frameborder="0" allowfullscreen></iframe>
</div>
