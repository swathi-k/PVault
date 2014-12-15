<?php

$menu = '<div id="hmenu">

	<ul>
	<li id="link">
	<a href="./index.php">Home</a>
	</li>
	';

$registernavpill = '
	<li id="link">
	<a href="./register.php">Register</a>
	</li>
	';

$menu = $menu . $registernavpill;

$loginnavpill = '
	<li id="link">
	<a href="./index.php">Login</a>
	</li>
	';

$menu = $menu . $loginnavpill;

$menu = $menu . '
	</ul>
	</div>';

print ($menu);
?>