 
 <div id="login_header">
 	<?php if(empty($_SESSION['user'])) { ?>
        <p><a href="<?php echo BASE_URL; ?>Login">Login</a></p>
        <span id="last"><p><a href="<?php echo BASE_URL; ?>Login/Register">Register</a></p></span>
 	<?php } else { ?>
        <p><?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></p> 
        <p><a href="<?php echo BASE_URL; ?>Login/Account">Account</a></p>
  		<?php if(is_administrator( $_SESSION['user']['email'])) { ?>
       		<p><a href="<?php echo BASE_URL; ?>Import">Admin</a></p>
 		<?php } ?>  
        <span id="last"><p><a href="<?php echo BASE_URL; ?>Login/logout.php">Logout</a></p></span>
 	<?php } ?>        
</div>