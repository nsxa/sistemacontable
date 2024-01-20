<?php
include 'actividadeseconomicas.php';

	if(isset($_GET["id"]))
	{
	
	$u= new actividadeseconomicas;
	$u->delete("id",$_GET["id"]);
	echo "ok";
	header('Location: indexactividadeseconomicas.php');
	}
	?>