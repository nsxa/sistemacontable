
<?php
include 'Db.php';
Class pqr{Private $id;Private $Motivo;Private $Tipodocumento;Private $numerodedocumento;Private $correo;Private $uusers_id;Private $tiposolicitud_idtiposolicitud;Private $estado;public function getid(){
	return $this->id;}public function getMotivo(){
	return $this->Motivo;}public function getTipodocumento(){
	return $this->Tipodocumento;}public function getnumerodedocumento(){
	return $this->numerodedocumento;}public function getcorreo(){
	return $this->correo;}public function getuusers_id(){
	return $this->uusers_id;}public function gettiposolicitud_idtiposolicitud(){
	return $this->tiposolicitud_idtiposolicitud;}public function getestado(){
	return $this->estado;}public function putid($id){
	$this->id=$id;}public function putMotivo($Motivo){
	$this->Motivo=$Motivo;}public function putTipodocumento($Tipodocumento){
	$this->Tipodocumento=$Tipodocumento;}public function putnumerodedocumento($numerodedocumento){
	$this->numerodedocumento=$numerodedocumento;}public function putcorreo($correo){
	$this->correo=$correo;}public function putuusers_id($uusers_id){
	$this->uusers_id=$uusers_id;}public function puttiposolicitud_idtiposolicitud($tiposolicitud_idtiposolicitud){
	$this->tiposolicitud_idtiposolicitud=$tiposolicitud_idtiposolicitud;}public function putestado($estado){
	$this->estado=$estado;}public function gettodo(){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from pqr');
	return $r;
	}public function gettodowhereidid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from pqr where id="'.$id.'"');
	return $r;
	}public function gettodowhereMotivoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from pqr where Motivo="'.$id.'"');
	return $r;
	}public function gettodowhereTipodocumentoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from pqr where Tipodocumento="'.$id.'"');
	return $r;
	}public function gettodowherenumerodedocumentoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from pqr where numerodedocumento="'.$id.'"');
	return $r;
	}public function gettodowherecorreoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from pqr where correo="'.$id.'"');
	return $r;
	}public function gettodowhereuusers_idid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from pqr where uusers_id="'.$id.'"');
	return $r;
	}public function gettodowheretiposolicitud_idtiposolicitudid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from pqr where tiposolicitud_idtiposolicitud="'.$id.'"');
	return $r;
	}public function gettodowhereestadoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from pqr where estado="'.$id.'"');
	return $r;
	}public function insert($v0,$v1,$v2,$v3,$v4,$v5,$v6,$v7){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('INSERT INTO pqr (id,Motivo,Tipodocumento,numerodedocumento,correo,uusers_id,tiposolicitud_idtiposolicitud,estado) VALUES (NULL,"'.$v1.'","'.$v2.'","'.$v3.'","'.$v4.'","'.$v5.'","'.$v6.'","'.$v7.'")');
	return $r;
	}public function update($id,$v0,$v1,$v2,$v3,$v4,$v5,$v6,$v7)
	{
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('UPDATE pqr SET id="'.$v0.'", Motivo="'.$v1.'", Tipodocumento="'.$v2.'", numerodedocumento="'.$v3.'", correo="'.$v4.'", uusers_id="'.$v5.'", tiposolicitud_idtiposolicitud="'.$v6.'", estado="'.$v7.'" WHERE id = '.$v0);}
	public function delete($idnombre,$id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta("DELETE FROM pqr WHERE ".$idnombre." = ".$id."");	
		
	}} ?>