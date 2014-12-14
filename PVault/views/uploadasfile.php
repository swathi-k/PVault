 <?php
	$file_exts = array (
			"jpg",
			"bmp",
			"jpeg",
			"gif",
			"png",
			"pdf" 
	);
	
	$upload_exts = end ( explode ( ".", $_FILES ["file"] ["name"] ) );
	if ((($_FILES ["file"] ["type"] == "image/gif") || ($_FILES ["file"] ["type"] == "image/jpeg") || ($_FILES ["file"] ["type"] == "image/png") || ($_FILES ["file"] ["type"] == "image/pjpeg")) && ($_FILES ["file"] ["size"] < 2000000) && in_array ( $upload_exts, $file_exts )) 
	{
		if ($_FILES ["file"] ["error"] > 0) {
			echo "Return Code: " . $_FILES ["file"] ["error"] . "<br>";
		} else {
			
			$NewFileName = $_FILES ["file"] ["name"];
			$FileTitle = $_FILES ["file"] ["tmp_name"];
			$FileSize = ($_FILES ["file"] ["size"] / 1024);
			$uploaded_date = time();
			
			echo "Upload: " . $_FILES ["file"] ["name"] . "<br>";
			echo "Type: " . $_FILES ["file"] ["type"] . "<br>";
			echo "Size: " . ($_FILES ["file"] ["size"] / 1024) . " kB<br>";
			echo "Temp file: " . $_FILES ["file"] ["tmp_name"] . "<br>";
			
			$up_path = UPLOAD_PATH . "\\" . $_SESSION ['user_id'] . "\\";
			
			if (! file_exists ( $up_path )) {
				mkdir ( $up_path, 0777, true );
			}
			
			// Enter your path to upload file here
			if (file_exists ( $up_path . $_FILES ["file"] ["name"] )) {
				echo "<div class='error'>" . "(" . $_FILES ["file"] ["name"] . ")" . " already exists. " . "</div>";
			} else {
				move_uploaded_file ( $_FILES ["file"] ["tmp_name"], $up_path . $_FILES ["file"] ["name"] );
				echo "<div class='sucess'>" . "Stored in: " . $up_path . $_FILES ["file"] ["name"] . "</div>";
				
				//Enter query in SQL
				$uid = $_SESSION ['user_id'];
				$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
				$db->query("INSERT INTO file_records (userid, file_name, file_title, file_size, uploaded_date) VALUES ('$uid','$NewFileName','$FileTitle',$FileSize,'$uploaded_date')");
				
			}
		}
	} else {
		echo "<div class='error'>Invalid file</div>";
	}
	
	?>