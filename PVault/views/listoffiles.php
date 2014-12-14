 <?php
				//Enter query in SQL
				$uid = $_SESSION ['user_id'];
				$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
				$db->query("INSERT INTO file_records (userid, file_name, file_title, file_size, uploaded_date) VALUES ('$uid','$NewFileName','$FileTitle',$FileSize,'$uploaded_date')");
	
	?>