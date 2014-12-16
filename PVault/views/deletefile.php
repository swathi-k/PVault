<?php
 
 	if(isset($_POST['deletefile']))
 	{
 		//print($_POST['deletefile']);
		//Enter query in SQL
		$fileid = $_POST['deletefile'];
		$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		
		$result = $db->query ( "SELECT file_name FROM file_records WHERE id = $fileid");
		
		while($row = mysqli_fetch_array($result))
		{
			unlink(UPLOAD_DIR . $_SESSION ['user_id'] . '\\' . $row['file_name']);
		}
		
		$db->query("DELETE FROM file_records WHERE id = $fileid");
		
 	}
	
?>