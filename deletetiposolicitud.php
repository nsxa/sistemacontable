<?php
include 'tiposolicitud.php';

	if(isset($_GET["id"]))
	{
	
	$u= new tiposolicitud;
	$u->delete("idtiposolicitud",$_GET["id"]);
	echo "ok";
	header('Location: indextiposolicitud.php');
	}
	?>