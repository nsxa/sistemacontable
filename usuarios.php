
<?php
include 'Db.php';
Class usuarios{Private $id;Private $nombre;Private $correo;Private $password;public function getid(){
	return $this->id;}public function getnombre(){
	return $this->nombre;}public function getcorreo(){
	return $this->correo;}public function getpassword(){
	return $this->password;}public function putid($id){
	$this->id=$id;}public function putnombre($nombre){
	$this->nombre=$nombre;}public function putcorreo($correo){
	$this->correo=$correo;}public function putpassword($password){
	$this->password=$password;}public function gettodo(){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from usuarios');
	return $r;
	}public function gettodowhereidid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from usuarios where id="'.$id.'"');
	return $r;
	}public function gettodowherenombreid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from usuarios where nombre="'.$id.'"');
	return $r;
	}public function gettodowherecorreoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from usuarios where correo="'.$id.'"');
	return $r;
	}public function gettodowherepasswordid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from usuarios where password="'.$id.'"');
	return $r;
	}public function insert($v0,$v1,$v2,$v3){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('INSERT INTO usuarios (id,nombre,correo,password) VALUES (NULL,"'.$v1.'","'.$v2.'","'.$v3.'")');
	return $r;
	}public function update($id,$v0,$v1,$v2,$v3)
	{
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('UPDATE usuarios SET id="'.$v0.'", nombre="'.$v1.'", correo="'.$v2.'", password="'.$v3.'" WHERE id = '.$v0);}
	public function delete($idnombre,$id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta("DELETE FROM usuarios WHERE ".$idnombre." = ".$id."");	
		
	}} ?>