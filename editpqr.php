
<?php 
include 'pqr.php';

if(isset($_POST["Motivo"]))
{
	$o= new pqr();
	$o->update($_POST["id"],$_POST["id"],$_POST["Motivo"],$_POST["Tipodocumento"],$_POST["numerodedocumento"],$_POST["correo"],$_POST["uusers_id"],$_POST["tiposolicitud_idtiposolicitud"],$_POST["estado"]);
	echo "ok";
	
}else if(isset($_GET["id"]))
{
	$o= new pqr();
	$r=$o->gettodowhereidid($_GET["id"]);
	
	while ($row = mysqli_fetch_assoc($r)) {$todo["id"]=$row["id"];$todo["Motivo"]=$row["Motivo"];$todo["Tipodocumento"]=$row["Tipodocumento"];$todo["numerodedocumento"]=$row["numerodedocumento"];$todo["correo"]=$row["correo"];$todo["uusers_id"]=$row["uusers_id"];$todo["tiposolicitud_idtiposolicitud"]=$row["tiposolicitud_idtiposolicitud"];$todo["estado"]=$row["estado"];	
	}
?>
<html>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="docs.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	$('#id').prop('readonly', true);
	
	$("#ingresar").click(function(){var id=$("#id").val();var Motivo=$("#Motivo").val();var Tipodocumento=$("#Tipodocumento").val();var numerodedocumento=$("#numerodedocumento").val();var correo=$("#correo").val();var uusers_id=$("#uusers_id").val();var tiposolicitud_idtiposolicitud=$("#tiposolicitud_idtiposolicitud").val();var estado=$("#estado").val();if(id=="")
		{
			alert("id vacio");
			return false;
		}if(Motivo=="")
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
    url : "editpqr.php",
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
Editar pqr
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
  <label for="usr">id:</label>
  <input name="id" type="text" class="form-control" id="id" value="<?php echo $todo["id"]; ?>">
</div><div class="form-group">
  <label for="usr">Tipodocumento:</label>
  <input name="Tipodocumento" type="text" class="form-control" id="Tipodocumento" value="<?php echo $todo["Tipodocumento"]; ?>">
</div><div class="form-group">
  <label for="usr">correo:</label>
  <input name="correo" type="text" class="form-control" id="correo" value="<?php echo $todo["correo"]; ?>">
</div><div class="form-group">
  <label for="usr">tiposolicitud_idtiposolicitud:</label>
  <input name="tiposolicitud_idtiposolicitud" type="text" class="form-control" id="tiposolicitud_idtiposolicitud" value="<?php echo $todo["tiposolicitud_idtiposolicitud"]; ?>">
</div><button id="ingresar" type="button" class="btn btn-primary">Editar</button>
</div>
<div class="col-md-6"><div class="form-group">
  <label for="usr">Motivo:</label>
  <input name="Motivo" type="text" class="form-control" id="Motivo" value="<?php echo $todo["Motivo"]; ?>">
</div><div class="form-group">
  <label for="usr">numerodedocumento:</label>
  <input name="numerodedocumento" type="text" class="form-control" id="numerodedocumento" value="<?php echo $todo["numerodedocumento"]; ?>">
</div><div class="form-group">
  <label for="usr">uusers_id:</label>
  <input name="uusers_id" type="text" class="form-control" id="uusers_id" value="<?php echo $todo["uusers_id"]; ?>">
</div><div class="form-group">
  <label for="usr">estado:</label>
  <input name="estado" type="text" class="form-control" id="estado" value="<?php echo $todo["estado"]; ?>">
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