<?php include("_header.php");?>
<?php

	$fileid = $_SESSION['file_id'];
	unset($_SESSION['file_view']);
	// Enter query in SQL
	$uid = $_SESSION ['user_id'];
	$db = new mysqli ( DB_HOST, DB_USER, DB_PASS, DB_NAME );
	$result = $db->query ( "SELECT id, file_name FROM file_records WHERE id =" . $fileid . " LIMIT 1");
	
	while($row = mysqli_fetch_array($result))
	{
		
		$fname = $row['file_name'];
		$fname = strval($fname);
		$fid = $row['id'];
	}
				
	$newurl = UPLOAD_DIR . $uid . '\\' . $fname;
	$newurl = "http://localhost/uploads/" . $uid . "/" . $fname;
	/* Redirect browser */
 	header("Location:" . $newurl);
 	
 	/* Make sure that code below does not get executed when we redirect. */
 	//exit;
?>