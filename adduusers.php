<?php 
include 'uusers.php';

if(isset($_POST["nombredeusuario"]))
{
	$o= new uusers();
	$o->insert(NULL,$_POST["nombredeusuario"],$_POST["mail"],$_POST["contrasenia"],$_POST["foto"],$_POST["rut_id"]);
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

	$("#ingresar").click(function(){var nombredeusuario=$("#nombredeusuario").val();var mail=$("#mail").val();var contrasenia=$("#contrasenia").val();var foto=$("#foto").val();var rut_id=$("#rut_id").val();if(nombredeusuario=="")
		{
			alert("nombredeusuario vacio");
			return false;
		}if(mail=="")
		{
			alert("mail vacio");
			return false;
		}if(contrasenia=="")
		{
			alert("contrasenia vacio");
			return false;
		}if(foto=="")
		{
			alert("foto vacio");
			return false;
		}if(rut_id=="")
		{
			alert("rut_id vacio");
			return false;
		}
		
		
		$.ajax({
    url : "adduusers.php",
    type: "POST",
    data : $("#formuusers").serialize(),
    success: function(r)
    {
        $("#response").html(r);
    },
});
		
});

});
</script>
<title>
Agregar uusers
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
<form id="formuusers">

<div class="row">
  <div class="col-md-6"><div class="form-group">
  <label for="usr">nombredeusuario:</label>
  <input name="nombredeusuario" type="text" class="form-control" id="nombredeusuario">
</div><div class="form-group">
  <label for="usr">contrasenia:</label>
  <input name="contrasenia" type="text" class="form-control" id="contrasenia">
</div><div class="form-group">
  <label for="usr">rut_id:</label>
  <input name="rut_id" type="text" class="form-control" id="rut_id">
</div><button id="ingresar" type="button" class="btn btn-primary">Ingresar</button>
</div>
<div class="col-md-6"><div class="form-group">
  <label for="usr">mail:</label>
  <input name="mail" type="text" class="form-control" id="mail">
</div><div class="form-group">
  <label for="usr">foto:</label>
  <input name="foto" type="text" class="form-control" id="foto">
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