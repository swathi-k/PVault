<?php include('_header.php'); ?>

<div id="logged_in"><center><h2>Hello!  <?php echo WORDING_YOU_ARE_LOGGED_IN_AS . $_SESSION['user_name'] . ".</h2><br />"; ?>
Your user ID is <?php echo $_SESSION['user_id'] . ".<br />"; ?></center>
<p>Ready to upload?</br>
<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="file">Filename:</label>
	<input type="file" name="file" id="file">
	<input type="submit" name="submit" value="Submit">
</form>
</p>
</div>

<?php include('_footer.php'); ?>
