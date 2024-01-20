<?php
include 'registros.php';

	if(isset($_GET["id"]))
	{
	
	$u= new registros;
	$u->delete("id",$_GET["id"]);
	echo "ok";
	header('Location: indexregistros.php');
	}
	?>