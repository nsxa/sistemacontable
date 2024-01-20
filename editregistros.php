
<?php 
include 'registros.php';

if(isset($_POST["Digito"]))
{
	$o= new registros();
	$o->update($_POST["id"],$_POST["id"],$_POST["Digito"],$_POST["codigo"],$_POST["cuenta"],$_POST["debito"],$_POST["credito"]);
	echo "ok";
	
}else if(isset($_GET["id"]))
{
	$o= new registros();
	$r=$o->gettodowhereidid($_GET["id"]);
	
	while ($row = mysqli_fetch_assoc($r)) {$todo["id"]=$row["id"];$todo["Digito"]=$row["Digito"];$todo["codigo"]=$row["codigo"];$todo["cuenta"]=$row["cuenta"];$todo["debito"]=$row["debito"];$todo["credito"]=$row["credito"];	
	}
?>
<html>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="docs.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	$('#id').prop('readonly', true);
	
	$("#ingresar").click(function(){var id=$("#id").val();var Digito=$("#Digito").val();var codigo=$("#codigo").val();var cuenta=$("#cuenta").val();var debito=$("#debito").val();var credito=$("#credito").val();if(id=="")
		{
			alert("id vacio");
			return false;
		}if(Digito=="")
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
    url : "editregistros.php",
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
Editar registros
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
  <label for="usr">id:</label>
  <input name="id" type="text" class="form-control" id="id" value="<?php echo $todo["id"]; ?>">
</div><div class="form-group">
  <label for="usr">codigo:</label>
  <input name="codigo" type="text" class="form-control" id="codigo" value="<?php echo $todo["codigo"]; ?>">
</div><div class="form-group">
  <label for="usr">debito:</label>
  <input name="debito" type="text" class="form-control" id="debito" value="<?php echo $todo["debito"]; ?>">
</div><button id="ingresar" type="button" class="btn btn-primary">Editar</button>
</div>
<div class="col-md-6"><div class="form-group">
  <label for="usr">Digito:</label>
  <input name="Digito" type="text" class="form-control" id="Digito" value="<?php echo $todo["Digito"]; ?>">
</div><div class="form-group">
  <label for="usr">cuenta:</label>
  <input name="cuenta" type="text" class="form-control" id="cuenta" value="<?php echo $todo["cuenta"]; ?>">
</div><div class="form-group">
  <label for="usr">credito:</label>
  <input name="credito" type="text" class="form-control" id="credito" value="<?php echo $todo["credito"]; ?>">
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