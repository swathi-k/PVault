 <?php
	$file_exts = array (
			"jpg",
			"bmp",
			"jpeg",
			"gif",
			"png",
			"pdf" 
	);
	
	$tmp = explode ( ".", $_FILES ["file"] ["name"] );
	$upload_exts = end ( $tmp );
	if ((($_FILES ["file"] ["type"] == "image/gif") || ($_FILES ["file"] ["type"] == "image/jpeg") || ($_FILES ["file"] ["type"] == "image/png") || ($_FILES ["file"] ["type"] == "image/pjpeg") || ($_FILES ["file"] ["type"] == "application/pdf")) && ($_FILES ["file"] ["size"] < 2000000) && in_array ( $upload_exts, $file_exts )) 
	{
		if ($_FILES ["file"] ["error"] > 0) {
			echo "Return Code: " . $_FILES ["file"] ["error"] . "<br>";
		} else {
			$filetype = $upload_exts;
			$NewFileName = $_FILES ["file"] ["name"];
			$FileTitle = $_FILES ["file"] ["tmp_name"];
			$FileSize = ($_FILES ["file"] ["size"] / 1024);
			$uploaded_date = date("Y-m-d H:i:s");
			
			$up_path = UPLOAD_PATH . "\\" . $_SESSION ['user_id'] . "\\";
			
			if (! file_exists ( $up_path )) {
				mkdir ( $up_path, 0777, true );
			}
			
			// Enter your path to upload file here
			if (file_exists ( $up_path . $_FILES ["file"] ["name"] )) {
				echo "<div class='error'>" . $_FILES ["file"] ["name"] . WORDING_FILE_UPLOAD_ERROR_EXISTS . "</div>";
				print '<script>alert("'. $_FILES ["file"] ["name"] . WORDING_FILE_UPLOAD_ERROR_EXISTS .'");</script>';
			} else {
				$alertstring =  'Uploaded ' . $_FILES ["file"] ["name"];
				print '<script>alert("'. $alertstring .'");</script>';
				
				move_uploaded_file ( $_FILES ["file"] ["tmp_name"], $up_path . $_FILES ["file"] ["name"] );
				
				//Enter query in SQL
				$uid = $_SESSION ['user_id'];
				$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
				$db->query("INSERT INTO file_records (userid, file_name, file_title, file_size, uploaded_date, file_type) VALUES ('$uid','$NewFileName','$FileTitle','$FileSize','$uploaded_date','$filetype')");
				
			}
		}
	} else {
		echo "<div class='error'>" . WORDING_FILE_UPLOAD_ERROR . "</div>";
		print '<script>alert("'. WORDING_FILE_UPLOAD_ERROR .'");</script>';
	}
	
	?>