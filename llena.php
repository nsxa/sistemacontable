<?php 
include 'usuarios.php';


	$o= new usuarios();
	
	
	for($k=0;$k<1000;$k++){
	
	$o->insert(NULL,"Alvaro Ivan Martinez Gamba ".$k,"nsxa@outlook.com","1012339769");
	$o->insert(NULL,"Alvaro jhonson Martinez Martinez ".$k,"nsxa@outlook.com","19395400");
	$o->insert(NULL,"Sandra Maritza Gamba Jaimes ".$k,"nsxa@outlook.com","51787770");
	$o->insert(NULL,"Juan Carlos Duarte Castillo ".$k,"juanc.duarte@hotmail.com","51787770");
	}
	
	echo "ok";
	


?>

