<?php include('navbar_not_logged_in.php'); ?>
<?php include('_header.php'); ?>

<!-- show registration form, but only if we didn't submit already -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>

<Center><h1>Create your own PVault account.</h1></center>
<form id="registration_form" class="pure-form pure-form-stacked" method="post" action="register.php" name="registerform">
    
    <label for="user_name"><?php echo WORDING_REGISTRATION_USERNAME; ?></label>
    <input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required /></BR>

    <label for="user_email"><?php echo WORDING_REGISTRATION_EMAIL; ?></label>
    <input id="user_email" type="email" name="user_email" required /></BR>

    <label for="user_password_new"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
    <input id="user_password_new" type="password" name="user_password_new" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%]).{8,20})" required autocomplete="off" /></BR>

    <label for="user_password_repeat"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label>
    <input id="user_password_repeat" type="password" name="user_password_repeat" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%]).{8,20})" required autocomplete="off" /></BR>

    <img src="tools/showCaptcha.php" alt="captcha" /></BR>

    <label><?php echo WORDING_REGISTRATION_CAPTCHA; ?></label>
    <input type="text" name="captcha" required /></BR>

    <button type="submit" class="pure-button pure-input-1-4 pure-button-primary" name="register"  /><?php echo WORDING_REGISTER; ?></button>
</form>
<?php } ?>

    <a href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>

<?php include('_footer.php'); ?>
