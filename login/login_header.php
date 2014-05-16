 
 <div id="login_header">
 	<?php if(empty($_SESSION['user'])) { ?>
        <p><a href="<?php echo BASE_URL; ?>login/login.php">Login</a></p>
        <span id="last"><p><a href="<?php echo BASE_URL; ?>login/register.php">Register</a></p></span>
 	<?php } else { ?>
        <p><?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></p> 
        <p><a href="<?php echo BASE_URL; ?>login/edit_account.php">Account</a></p>
        <span id="last"><p><a href="<?php echo BASE_URL; ?>login/logout.php">Logout</a></p></span>
 	<?php } ?>        
</div>