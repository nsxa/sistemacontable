<?php 
include 'pqr.php';

if(isset($_POST["Motivo"]))
{
	$o= new pqr();
	$o->insert(NULL,$_POST["Motivo"],$_POST["Tipodocumento"],$_POST["numerodedocumento"],$_POST["correo"],1,$_POST["tiposolicitud_idtiposolicitud"],$_POST["estado"]);
	echo "ok";
	
}else 
{

?>
<html>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="docs.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){

	$("#ingresar").click(function(){var Motivo=$("#Motivo").val();var Tipodocumento=$("#Tipodocumento").val();var numerodedocumento=$("#numerodedocumento").val();var correo=$("#correo").val();var uusers_id=$("#uusers_id").val();var tiposolicitud_idtiposolicitud=$("#tiposolicitud_idtiposolicitud").val();var estado=$("#estado").val();if(Motivo=="")
		{
			alert("Motivo vacio");
			return false;
		}if(Tipodocumento=="")
		{
			alert("Tipodocumento vacio");
			return false;
		}if(numerodedocumento=="")
		{
			alert("numerodedocumento vacio");
			return false;
		}if(correo=="")
		{
			alert("correo vacio");
			return false;
		}if(uusers_id=="")
		{
			alert("uusers_id vacio");
			return false;
		}if(tiposolicitud_idtiposolicitud=="")
		{
			alert("tiposolicitud_idtiposolicitud vacio");
			return false;
		}if(estado=="")
		{
			alert("estado vacio");
			return false;
		}
		
		
		$.ajax({
    url : "addpqr.php",
    type: "POST",
    data : $("#formpqr").serialize(),
    success: function(r)
    {
        $("#response").html(r);
    },
});
		
});

});
</script>
<title>
Agregar pqr
</title>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
		</ul>
    </div>
</nav>

<br>
<br>
<br>
<br>

<div class="container" id="content" tabindex="-1">
<form id="formpqr">

<div class="row">
  <div class="col-md-6"><div class="form-group">
  <label for="usr">Descripcion del pqr:</label>
  <br>
  <textarea id="Motivo" name="Motivo" rows="10" cols="50"></textarea>
  
  <!-- input name="Motivo" type="text" class="form-control" id="Motivo"> -->
</div><div class="form-group">
  <label for="usr">numerodedocumento:</label>
  <input name="numerodedocumento" type="text" class="form-control" id="numerodedocumento">
</div><div class="form-group">
  <!-- <label for="usr">uusers_id:</label>
  <input name="uusers_id" type="text" class="form-control" id="uusers_id"> -->
</div><div class="form-group">

<select class="form-select" id="estado" name="estado">

    <option value="1" label="4923" selected>Atendido</option>
	<option value="2" label="4923" selected>En proceso</option>
	<option value="3" label="4923" selected>No atendido</option>
    
  </select>
  
  <!-- <label for="usr">estado:</label>
  <input name="estado" type="text" class="form-control" id="estado"> --> 
</div><button id="ingresar" type="button" class="btn btn-primary">Ingresar</button>
</div>
<div class="col-md-6"><div class="form-group">
  <label for="usr">Tipodocumento:</label>
  <input name="Tipodocumento" type="text" class="form-control" id="Tipodocumento">
</div><div class="form-group">
  <label for="usr">correo:</label>
  <input name="correo" type="text" class="form-control" id="correo">
</div><div class="form-group">

<select class="form-select" id="tiposolicitud_idtiposolicitud" name="tiposolicitud_idtiposolicitud">

    <option value="2" label="4923" selected>Petición</option>
	<option value="3" label="4923" selected>Queja reclamo</option>
	<option value="4" label="4923" selected>Recurso de reposición</option>
	<option value="5" label="4923" selected>Subsidio de apelacion</option>
    
  </select>
  
  <!-- <label for="usr">tiposolicitud_idtiposolicitud:</label>
  <input name="tiposolicitud_idtiposolicitud" type="text" class="form-control" id="tiposolicitud_idtiposolicitud">-->
</div>
  </div>
</div>

</form>
<div id="response">
</div>
</div>
</html>
<?php

}

?>