 <?php
	
	// Enter query in SQL
	$uid = $_SESSION ['user_id'];
	$db = new mysqli ( DB_HOST, DB_USER, DB_PASS, DB_NAME );
	$result = $db->query ( "SELECT id, file_name, file_size, uploaded_date, file_type FROM file_records WHERE userid =" . $uid );
	
	if(isset($_POST['searchkeyword'])) {
		$searchkey = $_POST['searchkeyword'];
		$result = $db->query ( "SELECT id, file_name, file_size, uploaded_date, file_type FROM file_records WHERE userid =" . $uid . " AND file_name LIKE '%" . $searchkey . "%'");
	}
	
	if(isset($_GET['orderBy'])) {
		$order = $_GET['orderBy'];
		$direction = 'ASC';
		if(isset($_SESSION[$order])) {
			$_SESSION[$order] = !$_SESSION[$order];
		}
		else {
			$_SESSION[$order] = true;
		}
		
		if(!$_SESSION[$order]) {
			$direction = 'DESC';
		}
		
		$result = $db->query ( "SELECT id, file_name, file_size, uploaded_date, file_type FROM file_records WHERE userid =" . $uid . " ORDER BY " . $order . " " . $direction );
	}
	
	print ('<table style="width:100%">');
		
		print ('<tr>
					<th>
						<a href="index.php?orderBy=file_name">File Name</a>
					</th>
					<th>
						<a href="index.php?orderBy=file_size">Size</a>
					</th>
					<th>
						<a href="index.php?orderBy=uploaded_date">Uploaded Date</a>
					</th>
					<th>
						<a href="index.php?orderBy=file_type">File Type</a>
					</th>
				</tr>');
	
	while($row = mysqli_fetch_array($result))
	{	
		print ('<tr>');
			$fname = $row['file_name'];
			$fname = strval($fname);
			
			print ('<td>');
				print('<a href="' . UPLOAD_DIR . $uid . '\\' . $fname . ' "onclick="myFunction()">');
					print ($fname);
				print("</a>");
			print ('</td>');

			print ('<td>');
				print ($row['file_size']);
			print (' kb</td>');
				
			print ('<td>');
				print ($row['uploaded_date']);
			print ('</td>');
			
			print ('<td>');
				print ($row['file_type']);
			print ('</td>');
			
			print ('<td>');
				print "<form action=\"index.php\" method=\"post\">";
					print "<input type=\"image\" src=\"http://megaicons.net/static/img/icons_sizes/16/624/24/trash-can-icon.png\" name=\"deletefile\" value=\"{$row['id']}\"/>";
				print "</form>";
			print ('</td>');
			
		print ('</tr>');
	}				
	
	print ('</table>') ;
	?>