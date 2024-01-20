<?php 
include 'registros.php';

if(isset($_POST["Digito"]))
{
	$o= new registros();
	$o->insert(NULL,$_POST["Digito"],$_POST["codigo"],$_POST["cuenta"],$_POST["debito"],$_POST["credito"]);
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

	$("#ingresar").click(function(){var Digito=$("#Digito").val();var codigo=$("#codigo").val();var cuenta=$("#cuenta").val();var debito=$("#debito").val();var credito=$("#credito").val();if(Digito=="")
		{
			alert("Digito vacio");
			return false;
		}if(codigo=="")
		{
			alert("codigo vacio");
			return false;
		}if(cuenta=="")
		{
			alert("cuenta vacio");
			return false;
		}if(debito=="")
		{
			alert("debito vacio");
			return false;
		}if(credito=="")
		{
			alert("credito vacio");
			return false;
		}
		
		
		$.ajax({
    url : "addregistros.php",
    type: "POST",
    data : $("#formregistros").serialize(),
    success: function(r)
    {
        $("#response").html(r);
    },
});
		
});

});
</script>
<title>
Agregar registros
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
<form id="formregistros">

<div class="row">
  <div class="col-md-6"><div class="form-group">
  <label for="usr">Digito:</label>
  <input name="Digito" type="text" class="form-control" id="Digito">
</div><div class="form-group">
  <label for="usr">cuenta:</label>
  <input name="cuenta" type="text" class="form-control" id="cuenta">
</div><div class="form-group">
  <label for="usr">credito:</label>
  <input name="credito" type="text" class="form-control" id="credito">
</div><button id="ingresar" type="button" class="btn btn-primary">Ingresar</button>
</div>
<div class="col-md-6"><div class="form-group">
  <label for="usr">codigo:</label>
  <input name="codigo" type="text" class="form-control" id="codigo">
</div><div class="form-group">
  <label for="usr">debito:</label>
  <input name="debito" type="text" class="form-control" id="debito">
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