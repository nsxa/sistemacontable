<?php
include 'uusers.php';

	if(isset($_GET["id"]))
	{
	
	$u= new uusers;
	$u->delete("id",$_GET["id"]);
	echo "ok";
	header('Location: indexuusers.php');
	}
	?>