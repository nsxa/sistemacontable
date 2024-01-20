<?php

// Motrar todos los errores de PHP
error_reporting(-1);

// No mostrar los errores de PHP
error_reporting(0);

// Motrar todos los errores de PHP
error_reporting(E_ALL);

// Motrar todos los errores de PHP
ini_set('error_reporting', E_ALL);


class Db{
	
	private $con;
	
	public function conectar(){
$this->con=mysqli_connect("localhost","root","Arpanet61009","sistemacontable",3306);
//$this->con=mysqli_connect("sql213.infinityfree.com","if0_34979473","NuDOvdJ2A6Ga6W","if0_34979473_sdi",3306);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  }
  
  public function consulta($c)
  {
	  
	  echo $c;
	  //exit();
	  $resultado = mysqli_query($this->con,$c);
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    exit;
}
	  return $resultado;
  }
  
}
?>