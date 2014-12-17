<?php include('_header.php'); ?>
<?php 
print '<div id="logged_in">
	<center>
		<h2>' . WORDING_YOU_ARE_LOGGED_IN_AS . $_SESSION['user_name'] . '</h2><br />

	</center>
	' .
		WORDING_READY_UPLOAD . '</br>
	
	<center><table style="width:90%">		
	<td>
					
	<form action="index.php" method="post" enctype="multipart/form-data">
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file">
		<input type="submit" name="submit" value="Submit">
	</form>
	</td>
				<td>
			
	<form id="searchform" method=post action="index.php">
		<input type="text" placeholder="Search..." required
			name="searchkeyword">
		<input type="submit" name="submit" value="Enter">
	</form>
	</td>
	</table></center>
	
</div>';
?>
<?php include('_footer.php'); ?>
