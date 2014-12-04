<?php
	
	$menu = '<div id="hmenu">
	
	<ul>
	<li id="link">
	<a href="./index.php">Home</a>
	</li>
	<li id="link">';
	
	
	
	$login = '<a href="./login.php">Login</a></li>
	<li id="link">
	<a href="register.php">Register</a>
	</li>';
	
	
	
	$logout = '<a href="./logout.php">Logout</a>';
	
	session_start();
	
	if (!isset($_SESSION["uid"]))
	{
		$menu = $menu . $login;
	}
	
	else 
	{
		$menu = $menu . $logout;
	}
	
	$menu = $menu . '


	</ul>
	</div>';
	
	print ($menu);

?>