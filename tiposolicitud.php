
<?php
include 'Db.php';
Class tiposolicitud{Private $idtiposolicitud;Private $tipo;public function getidtiposolicitud(){
	return $this->idtiposolicitud;}public function gettipo(){
	return $this->tipo;}public function putidtiposolicitud($idtiposolicitud){
	$this->idtiposolicitud=$idtiposolicitud;}public function puttipo($tipo){
	$this->tipo=$tipo;}public function gettodo(){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from tiposolicitud');
	return $r;
	}public function gettodowhereidtiposolicitudid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from tiposolicitud where idtiposolicitud="'.$id.'"');
	return $r;
	}public function gettodowheretipoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from tiposolicitud where tipo="'.$id.'"');
	return $r;
	}public function insert($v0,$v1){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('INSERT INTO tiposolicitud (idtiposolicitud,tipo) VALUES (NULL,"'.$v1.'")');
	return $r;
	}public function update($id,$v0,$v1)
	{
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('UPDATE tiposolicitud SET idtiposolicitud="'.$v0.'", tipo="'.$v1.'" WHERE idtiposolicitud = '.$v0);}
	public function delete($idnombre,$id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta("DELETE FROM tiposolicitud WHERE ".$idnombre." = ".$id."");	
		
	}} ?>