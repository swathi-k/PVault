
<?php

$to_time = new \DateTime(date("d-m-Y H:i:s"));
$from_time = new \DateTime($_SESSION['user_time']);
$diff = $from_time->diff($to_time);
$diff_min = $diff->format('%i');
$diff_sec = $diff->format('%s');

//print($diff_min . " minutes ");
if($diff_min > 5)
{
	include("index.php");
}
else 
{
	include("index.php");
}

?>