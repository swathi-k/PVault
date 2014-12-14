<?php include('_header.php'); ?>

<?php
// if you need the user's information, just put them into the $_SESSION variable and output them here
echo WORDING_YOU_ARE_LOGGED_IN_AS . $_SESSION['user_name'] . "<br />";
echo WORDING_YOU_ARE_LOGGED_IN_AS . $_SESSION['user_id'] . "<br />";
?>

<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="file">Filename:</label>
	<input type="file" name="file" id="file"><br>
	<input type="submit" name="submit" value="Submit">
</form>



<?php include('_footer.php'); ?>
