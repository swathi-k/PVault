<?php include('_header.php'); ?>
<?php

$menu = '<div id="hmenu">

	<ul>
	<li id="link">
	<a href="./index.php">Home</a>
	</li>
	';

$logout = '
	<li id="link">
	<a href="index.php?logout">Logout</a>
	</li>
	';

$menu = $menu . $logout;

$edit = '
	<li id="link">
	<a href="edit.php">Edit Profile</a>
	</li>
	';

$menu = $menu . $edit;

$menu = $menu . '
	</ul>
	</div>';

print ($menu);

?>