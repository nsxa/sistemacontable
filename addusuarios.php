<?php 
include 'usuarios.php';

if(isset($_POST["nombre"]))
{
	$o= new usuarios();
	$o->insert(NULL,$_POST["nombre"],$_POST["correo"],$_POST["password"]);
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

	$("#ingresar").click(function(){var nombre=$("#nombre").val();var correo=$("#correo").val();var password=$("#password").val();if(nombre=="")
		{
			alert("nombre vacio");
			return false;
		}if(correo=="")
		{
			alert("correo vacio");
			return false;
		}if(password=="")
		{
			alert("password vacio");
			return false;
		}
		
		
		$.ajax({
    url : "addusuarios.php",
    type: "POST",
    data : $("#formusuarios").serialize(),
    success: function(r)
    {
        $("#response").html(r);
    },
});
		
});

});
</script>
<title>
Agregar usuarios
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
<form id="formusuarios">

<div class="row">
  <div class="col-md-6"><div class="form-group">
  <label for="usr">nombre:</label>
  <input name="nombre" type="text" class="form-control" id="nombre">
</div><div class="form-group">
  <label for="usr">password:</label>
  <input name="password" type="text" class="form-control" id="password">
</div><button id="ingresar" type="button" class="btn btn-primary">Ingresar</button>
</div>
<div class="col-md-6"><div class="form-group">
  <label for="usr">correo:</label>
  <input name="correo" type="text" class="form-control" id="correo">
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