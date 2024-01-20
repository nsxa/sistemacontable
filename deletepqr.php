<?php
include 'pqr.php';

	if(isset($_GET["id"]))
	{
	
	$u= new pqr;
	$u->delete("id",$_GET["id"]);
	echo "ok";
	header('Location: indexpqr.php');
	}
	?>