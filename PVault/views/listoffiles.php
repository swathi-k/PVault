 <?php
	
	// Enter query in SQL
	$uid = $_SESSION ['user_id'];
	$db = new mysqli ( DB_HOST, DB_USER, DB_PASS, DB_NAME );
	$result = $db->query ( "SELECT id, file_name, file_size, uploaded_date FROM file_records WHERE userid =" . $uid );
	
	print ('<table style="width:100%">');
		
		print ('<tr>
					<td>
						File Name
					</td>
					<td>
						Size
					</td>
					<td>
						Uploaded Date
					</td>
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
				print "<form action=\"index.php\" method=\"post\">";
					print "<input type=\"image\" src=\"http://megaicons.net/static/img/icons_sizes/16/624/24/trash-can-icon.png\" name=\"deletefile\" value=\"{$row['id']}\"/>";
				print "</form>";
			print ('</td>');
			
		print ('</tr>');
	}				
	
	print ('</table>') ;
	?>