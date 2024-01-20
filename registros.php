
<?php
include 'Db.php';
Class registros{Private $id;Private $Digito;Private $codigo;Private $cuenta;Private $debito;Private $credito;public function getid(){
	return $this->id;}public function getDigito(){
	return $this->Digito;}public function getcodigo(){
	return $this->codigo;}public function getcuenta(){
	return $this->cuenta;}public function getdebito(){
	return $this->debito;}public function getcredito(){
	return $this->credito;}public function putid($id){
	$this->id=$id;}public function putDigito($Digito){
	$this->Digito=$Digito;}public function putcodigo($codigo){
	$this->codigo=$codigo;}public function putcuenta($cuenta){
	$this->cuenta=$cuenta;}public function putdebito($debito){
	$this->debito=$debito;}public function putcredito($credito){
	$this->credito=$credito;}public function gettodo(){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from registros');
	return $r;
	}public function gettodowhereidid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from registros where id="'.$id.'"');
	return $r;
	}public function gettodowhereDigitoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from registros where Digito="'.$id.'"');
	return $r;
	}public function gettodowherecodigoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from registros where codigo="'.$id.'"');
	return $r;
	}public function gettodowherecuentaid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from registros where cuenta="'.$id.'"');
	return $r;
	}public function gettodowheredebitoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from registros where debito="'.$id.'"');
	return $r;
	}public function gettodowherecreditoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from registros where credito="'.$id.'"');
	return $r;
	}public function insert($v0,$v1,$v2,$v3,$v4,$v5){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('INSERT INTO registros (id,Digito,codigo,cuenta,debito,credito) VALUES (NULL,"'.$v1.'","'.$v2.'","'.$v3.'","'.$v4.'","'.$v5.'")');
	return $r;
	}public function update($id,$v0,$v1,$v2,$v3,$v4,$v5)
	{
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('UPDATE registros SET id="'.$v0.'", Digito="'.$v1.'", codigo="'.$v2.'", cuenta="'.$v3.'", debito="'.$v4.'", credito="'.$v5.'" WHERE id = '.$v0);}
	public function delete($idnombre,$id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta("DELETE FROM registros WHERE ".$idnombre." = ".$id."");	
		
	}} ?>