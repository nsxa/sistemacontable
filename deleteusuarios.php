<?php
include 'usuarios.php';

	if(isset($_GET["id"]))
	{
	
	$u= new usuarios;
	$u->delete("id",$_GET["id"]);
	echo "ok";
	header('Location: indexusuarios.php');
	}
	?>