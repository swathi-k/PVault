<?php include("_header.php");?>
<?php

	$file_id = $_GET['file_id'];

	print $file_id;
	
	$_SESSION['file_id'] = $file_id;
	$_SESSION['file_view'] = true;
	print '
	<center>	
		<div>Confirm Login</br>
		<form method="post" action="index.php?file_id=' . $file_id . '" >
			<fieldset>
				<label for="user_name">' . WORDING_USERNAME . '</label>
			    <input id="user_name" type="text" name="user_name" required />
			    <label for="user_password">' . WORDING_PASSWORD . '</label>
			    <input id="user_password" type="password" name="user_password" autocomplete="off" required />
			    <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
			    <label for="user_rememberme">' . WORDING_REMEMBER_ME . '</label>
			    <input type="submit" name="login" value="' . WORDING_LOGIN . '" />
			</fieldset>
		</form>
		<div id="external-links">
			<a href="password_reset.php">Forgot password?</a></br>
			<a href="register.php">Register</a>
		</div>
	</center>';

?>