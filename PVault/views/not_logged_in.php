<?php include('_header.php'); ?>
<div id="left">PVault01 is a project by Swathi Kotturu, Alexander Hwang, and Julian Zabala, who aim to digitize, centralize, and secure the personal documents of its users.</div>
<div id="right">Already a user?  Log in here.</br>
	<form method="post" class="pure-form pure-form-stacked" action="index.php" id="loginform" name="loginform">
		<fieldset>
		    <label for="user_name"><?php echo WORDING_USERNAME; ?></label>
		    <input id="user_name" type="text" name="user_name" required />
		    <label for="user_password"><?php echo WORDING_PASSWORD; ?></label>
		    <input id="user_password" type="password" name="user_password" autocomplete="off" required />
		    <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
		    <label for="user_rememberme"><?php echo WORDING_REMEMBER_ME; ?></label>
		    <input type="submit" name="login" value="<?php echo WORDING_LOGIN; ?>" />
		</fieldset>
	</form>
	<div id="external-links">
		<a href="password_reset.php">Forgot password?</a></br>
		<a href="register.php">Register</a>
	</div>
</div>
<?php include('_footer.php'); ?>
