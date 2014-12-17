<?php include('_header.php'); ?>
<?php include('navbar.php'); ?>
<!-- clean separation of HTML and PHP -->
<center><h2><?php echo $_SESSION['user_name']; ?>, <?php echo WORDING_EDIT_YOUR_CREDENTIALS; ?></h2></center>
<div id="edit-page">

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<form class="pure-form pure-form-stacked" method="post" action="edit.php" name="user_edit_form_name">
    <label for="user_name"><?php echo WORDING_NEW_USERNAME; ?></label>
    <input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_name']; ?>)</br>
    <button class="pure-button" type="submit" name="user_edit_submit_name" value="<?php echo WORDING_CHANGE_USERNAME; ?>" ><?php echo WORDING_CHANGE_USERNAME; ?></button>
</form><hr/>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
<form class="pure-form pure-form-stacked" method="post" action="edit.php" name="user_edit_form_email">
    <label for="user_email"><?php echo WORDING_NEW_EMAIL; ?></label>
    <input id="user_email" type="email" name="user_email" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_email']; ?>)</br>
    <button class="pure-button" type="submit" name="user_edit_submit_email" value="" ><?php echo WORDING_CHANGE_EMAIL; ?></button>
</form><hr/>

<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
<form class="pure-form pure-form-stacked" method="post" action="edit.php" name="user_edit_form_password">
    <label for="user_password_old"><?php echo WORDING_OLD_PASSWORD; ?></label>
    <input id="user_password_old" type="password" name="user_password_old" autocomplete="off" />

    <label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
    <input id="user_password_new" type="password" name="user_password_new" autocomplete="off" />

    <label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
    <input id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off" />

    <button class="pure-button" type="submit" name="user_edit_submit_password" value=""><?php echo WORDING_CHANGE_PASSWORD; ?></button>
</form><hr/>

<!-- backlink -->
<a href="index.php"><?php echo WORDING_BACK_TO_HOME; ?></a>
</div>
<?php include('_footer.php'); ?>
