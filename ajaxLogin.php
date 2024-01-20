<?php



session_start();

$_SESSION['loginuser']=$_GET['username'];

if(isset($_POST['user']))
{
	//$_SESSION['loginuser']=$_POST['user'];
	
}


?>