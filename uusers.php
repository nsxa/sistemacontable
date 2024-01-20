
<?php
include 'Db.php';
Class uusers{Private $id;Private $nombredeusuario;Private $mail;Private $contrasenia;Private $foto;Private $rut_id;public function getid(){
	return $this->id;}public function getnombredeusuario(){
	return $this->nombredeusuario;}public function getmail(){
	return $this->mail;}public function getcontrasenia(){
	return $this->contrasenia;}public function getfoto(){
	return $this->foto;}public function getrut_id(){
	return $this->rut_id;}public function putid($id){
	$this->id=$id;}public function putnombredeusuario($nombredeusuario){
	$this->nombredeusuario=$nombredeusuario;}public function putmail($mail){
	$this->mail=$mail;}public function putcontrasenia($contrasenia){
	$this->contrasenia=$contrasenia;}public function putfoto($foto){
	$this->foto=$foto;}public function putrut_id($rut_id){
	$this->rut_id=$rut_id;}public function gettodo(){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from uusers');
	return $r;
	}public function gettodowhereidid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from uusers where id="'.$id.'"');
	return $r;
	}public function gettodowherenombredeusuarioid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from uusers where nombredeusuario="'.$id.'"');
	return $r;
	}public function gettodowheremailid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from uusers where mail="'.$id.'"');
	return $r;
	}public function gettodowherecontraseniaid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from uusers where contrasenia="'.$id.'"');
	return $r;
	}public function gettodowherefotoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from uusers where foto="'.$id.'"');
	return $r;
	}public function gettodowhererut_idid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from uusers where rut_id="'.$id.'"');
	return $r;
	}public function insert($v0,$v1,$v2,$v3,$v4,$v5){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('INSERT INTO uusers (id,nombredeusuario,mail,contrasenia,foto,rut_id) VALUES (NULL,"'.$v1.'","'.$v2.'","'.$v3.'","'.$v4.'","'.$v5.'")');
	return $r;
	}public function update($id,$v0,$v1,$v2,$v3,$v4,$v5)
	{
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('UPDATE uusers SET id="'.$v0.'", nombredeusuario="'.$v1.'", mail="'.$v2.'", contrasenia="'.$v3.'", foto="'.$v4.'", rut_id="'.$v5.'" WHERE id = '.$v0);}
	public function delete($idnombre,$id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta("DELETE FROM uusers WHERE ".$idnombre." = ".$id."");	
		
	}} ?>