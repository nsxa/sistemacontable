
<?php
include 'Db.php';
Class rut{Private $id;Private $numerodeidentificacion;Private $DV;Private $mail;Private $tipodecontribuyente;Private $tipodedocumento;Private $fechadeexpedicion;Private $lugardeexpedicion;Private $departamento;Private $ciudadmunicipio;Private $primerapellido;Private $segundoapellido;Private $primernombre;Private $segundonombre;Private $razonsocial;Private $Nombrecomercial;Private $pais;Private $Direccion;Private $telefono;Private $telefono2;Private $aeid;Private $aeid2;Private $ocupacion;Private $responsabilidades;Private $Funcionarionombre;Private $cargo;public function getid(){
	return $this->id;}public function getnumerodeidentificacion(){
	return $this->numerodeidentificacion;}public function getDV(){
	return $this->DV;}public function getmail(){
	return $this->mail;}public function gettipodecontribuyente(){
	return $this->tipodecontribuyente;}public function gettipodedocumento(){
	return $this->tipodedocumento;}public function getfechadeexpedicion(){
	return $this->fechadeexpedicion;}public function getlugardeexpedicion(){
	return $this->lugardeexpedicion;}public function getdepartamento(){
	return $this->departamento;}public function getciudadmunicipio(){
	return $this->ciudadmunicipio;}public function getprimerapellido(){
	return $this->primerapellido;}public function getsegundoapellido(){
	return $this->segundoapellido;}public function getprimernombre(){
	return $this->primernombre;}public function getsegundonombre(){
	return $this->segundonombre;}public function getrazonsocial(){
	return $this->razonsocial;}public function getNombrecomercial(){
	return $this->Nombrecomercial;}public function getpais(){
	return $this->pais;}public function getDireccion(){
	return $this->Direccion;}public function gettelefono(){
	return $this->telefono;}public function gettelefono2(){
	return $this->telefono2;}public function getaeid(){
	return $this->aeid;}public function getaeid2(){
	return $this->aeid2;}public function getocupacion(){
	return $this->ocupacion;}public function getresponsabilidades(){
	return $this->responsabilidades;}public function getFuncionarionombre(){
	return $this->Funcionarionombre;}public function getcargo(){
	return $this->cargo;}public function putid($id){
	$this->id=$id;}public function putnumerodeidentificacion($numerodeidentificacion){
	$this->numerodeidentificacion=$numerodeidentificacion;}public function putDV($DV){
	$this->DV=$DV;}public function putmail($mail){
	$this->mail=$mail;}public function puttipodecontribuyente($tipodecontribuyente){
	$this->tipodecontribuyente=$tipodecontribuyente;}public function puttipodedocumento($tipodedocumento){
	$this->tipodedocumento=$tipodedocumento;}public function putfechadeexpedicion($fechadeexpedicion){
	$this->fechadeexpedicion=$fechadeexpedicion;}public function putlugardeexpedicion($lugardeexpedicion){
	$this->lugardeexpedicion=$lugardeexpedicion;}public function putdepartamento($departamento){
	$this->departamento=$departamento;}public function putciudadmunicipio($ciudadmunicipio){
	$this->ciudadmunicipio=$ciudadmunicipio;}public function putprimerapellido($primerapellido){
	$this->primerapellido=$primerapellido;}public function putsegundoapellido($segundoapellido){
	$this->segundoapellido=$segundoapellido;}public function putprimernombre($primernombre){
	$this->primernombre=$primernombre;}public function putsegundonombre($segundonombre){
	$this->segundonombre=$segundonombre;}public function putrazonsocial($razonsocial){
	$this->razonsocial=$razonsocial;}public function putNombrecomercial($Nombrecomercial){
	$this->Nombrecomercial=$Nombrecomercial;}public function putpais($pais){
	$this->pais=$pais;}public function putDireccion($Direccion){
	$this->Direccion=$Direccion;}public function puttelefono($telefono){
	$this->telefono=$telefono;}public function puttelefono2($telefono2){
	$this->telefono2=$telefono2;}public function putaeid($aeid){
	$this->aeid=$aeid;}public function putaeid2($aeid2){
	$this->aeid2=$aeid2;}public function putocupacion($ocupacion){
	$this->ocupacion=$ocupacion;}public function putresponsabilidades($responsabilidades){
	$this->responsabilidades=$responsabilidades;}public function putFuncionarionombre($Funcionarionombre){
	$this->Funcionarionombre=$Funcionarionombre;}public function putcargo($cargo){
	$this->cargo=$cargo;}public function gettodo(){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut');
	return $r;
	}public function gettodowhereidid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where id="'.$id.'"');
	return $r;
	}public function gettodowherenumerodeidentificacionid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where numerodeidentificacion="'.$id.'"');
	return $r;
	}public function gettodowhereDVid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where DV="'.$id.'"');
	return $r;
	}public function gettodowheremailid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where mail="'.$id.'"');
	return $r;
	}public function gettodowheretipodecontribuyenteid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where tipodecontribuyente="'.$id.'"');
	return $r;
	}public function gettodowheretipodedocumentoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where tipodedocumento="'.$id.'"');
	return $r;
	}public function gettodowherefechadeexpedicionid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where fechadeexpedicion="'.$id.'"');
	return $r;
	}public function gettodowherelugardeexpedicionid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where lugardeexpedicion="'.$id.'"');
	return $r;
	}public function gettodowheredepartamentoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where departamento="'.$id.'"');
	return $r;
	}public function gettodowhereciudadmunicipioid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where ciudadmunicipio="'.$id.'"');
	return $r;
	}public function gettodowhereprimerapellidoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where primerapellido="'.$id.'"');
	return $r;
	}public function gettodowheresegundoapellidoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where segundoapellido="'.$id.'"');
	return $r;
	}public function gettodowhereprimernombreid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where primernombre="'.$id.'"');
	return $r;
	}public function gettodowheresegundonombreid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where segundonombre="'.$id.'"');
	return $r;
	}public function gettodowhererazonsocialid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where razonsocial="'.$id.'"');
	return $r;
	}public function gettodowhereNombrecomercialid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where Nombrecomercial="'.$id.'"');
	return $r;
	}public function gettodowherepaisid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where pais="'.$id.'"');
	return $r;
	}public function gettodowhereDireccionid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where Direccion="'.$id.'"');
	return $r;
	}public function gettodowheretelefonoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where telefono="'.$id.'"');
	return $r;
	}public function gettodowheretelefono2id($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where telefono2="'.$id.'"');
	return $r;
	}public function gettodowhereaeidid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where aeid="'.$id.'"');
	return $r;
	}public function gettodowhereaeid2id($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where aeid2="'.$id.'"');
	return $r;
	}public function gettodowhereocupacionid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where ocupacion="'.$id.'"');
	return $r;
	}public function gettodowhereresponsabilidadesid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where responsabilidades="'.$id.'"');
	return $r;
	}public function gettodowhereFuncionarionombreid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where Funcionarionombre="'.$id.'"');
	return $r;
	}public function gettodowherecargoid($id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('Select * from rut where cargo="'.$id.'"');
	return $r;
	}public function insert($v0,$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$v10,$v11,$v12,$v13,$v14,$v15,$v16,$v17,$v18,$v19,$v20,$v21,$v22,$v23,$v24,$v25){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('INSERT INTO rut (id,numerodeidentificacion,DV,mail,tipodecontribuyente,tipodedocumento,fechadeexpedicion,lugardeexpedicion,departamento,ciudadmunicipio,primerapellido,segundoapellido,primernombre,segundonombre,razonsocial,Nombrecomercial,pais,Direccion,telefono,telefono2,aeid,aeid2,ocupacion,responsabilidades,Funcionarionombre,cargo) VALUES (NULL,"'.$v1.'","'.$v2.'","'.$v3.'","'.$v4.'","'.$v5.'","'.$v6.'","'.$v7.'","'.$v8.'","'.$v9.'","'.$v10.'","'.$v11.'","'.$v12.'","'.$v13.'","'.$v14.'","'.$v15.'","'.$v16.'","'.$v17.'","'.$v18.'","'.$v19.'","'.$v20.'","'.$v21.'","'.$v22.'","'.$v23.'","'.$v24.'","'.$v25.'")');
	return $r;
	}public function update($id,$v0,$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$v10,$v11,$v12,$v13,$v14,$v15,$v16,$v17,$v18,$v19,$v20,$v21,$v22,$v23,$v24,$v25)
	{
	$con= new Db;
	$con->conectar();
	$r=$con->consulta('UPDATE rut SET id="'.$v0.'", numerodeidentificacion="'.$v1.'", DV="'.$v2.'", mail="'.$v3.'", tipodecontribuyente="'.$v4.'", tipodedocumento="'.$v5.'", fechadeexpedicion="'.$v6.'", lugardeexpedicion="'.$v7.'", departamento="'.$v8.'", ciudadmunicipio="'.$v9.'", primerapellido="'.$v10.'", segundoapellido="'.$v11.'", primernombre="'.$v12.'", segundonombre="'.$v13.'", razonsocial="'.$v14.'", Nombrecomercial="'.$v15.'", pais="'.$v16.'", Direccion="'.$v17.'", telefono="'.$v18.'", telefono2="'.$v19.'", aeid="'.$v20.'", aeid2="'.$v21.'", ocupacion="'.$v22.'", responsabilidades="'.$v23.'", Funcionarionombre="'.$v24.'", cargo="'.$v25.'" WHERE id = '.$v0);}
	public function delete($idnombre,$id){
	$con= new Db;
	$con->conectar();
	$r=$con->consulta("DELETE FROM rut WHERE ".$idnombre." = ".$id."");	
		
	}} ?>