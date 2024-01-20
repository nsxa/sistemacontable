
<?php
include 'Db.php';
Class actividadeseconomicas{Private $id;Private $Nombre;Private $codigo;public function getid(){
	return $this->id;}public function getNombre(){
	return $this->Nombre;}public function getcodigo(){
	return $this->codigo;}public function putid($id){
	$this->id=$id;}public function putNombre($Nombre){
	$this->Nombre=$Nombre;}public function putcodigo($codigo){
	$this->codigo=$codigo;}public function gettodo(){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from actividadeseconomicas');
	return $r;
	}public function gettodowhereidid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from actividadeseconomicas where id="'.$id.'"');
	return $r;
	}public function gettodowhereNombreid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from actividadeseconomicas where Nombre="'.$id.'"');
	return $r;
	}public function gettodowherecodigoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from actividadeseconomicas where codigo="'.$id.'"');
	return $r;
	}public function insert($v0,$v1,$v2){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('INSERT INTO actividadeseconomicas (id,Nombre,codigo) VALUES (NULL,"'.$v1.'","'.$v2.'")');
	return $r;
	}public function update($id,$v0,$v1,$v2)
	{
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('UPDATE actividadeseconomicas SET id="'.$v0.'", Nombre="'.$v1.'", codigo="'.$v2.'" WHERE id = '.$v0);}
	public function delete($idnombre,$id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta("DELETE FROM actividadeseconomicas WHERE ".$idnombre." = ".$id."");	
		
	}} ?>