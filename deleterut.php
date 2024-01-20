<?php
include 'rut.php';

	if(isset($_GET["id"]))
	{
	
	$u= new rut;
	$u->delete("id",$_GET["id"]);
	echo "ok";
	header('Location: indexrut.php');
	}
	?>