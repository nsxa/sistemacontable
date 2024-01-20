
<?php 
include 'actividadeseconomicas.php';

if(isset($_POST["Nombre"]))
{
	$o= new actividadeseconomicas();
	$o->update($_POST["id"],$_POST["id"],$_POST["Nombre"],$_POST["codigo"]);
	echo "ok";
	
}else if(isset($_GET["id"]))
{
	$o= new actividadeseconomicas();
	$r=$o->gettodowhereidid($_GET["id"]);
	
	while ($row = mysqli_fetch_assoc($r)) {$todo["id"]=$row["id"];$todo["Nombre"]=$row["Nombre"];$todo["codigo"]=$row["codigo"];	
	}
?>
<html>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="docs.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	$('#id').prop('readonly', true);
	
	$("#ingresar").click(function(){var id=$("#id").val();var Nombre=$("#Nombre").val();var codigo=$("#codigo").val();if(id=="")
		{
			alert("id vacio");
			return false;
		}if(Nombre=="")
		{
			alert("Nombre vacio");
			return false;
		}if(codigo=="")
		{
			alert("codigo vacio");
			return false;
		}
		
		
		$.ajax({
    url : "editactividadeseconomicas.php",
    type: "POST",
    data : $("#formactividadeseconomicas").serialize(),
    success: function(r)
    {
        $("#response").html(r);
    },
});
		
});

});
</script>
<title>
Editar actividadeseconomicas
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
<form id="formactividadeseconomicas">

<div class="row">
  <div class="col-md-6"><div class="form-group">
  <label for="usr">id:</label>
  <input name="id" type="text" class="form-control" id="id" value="<?php echo $todo["id"]; ?>">
</div><div class="form-group">
  <label for="usr">codigo:</label>
  <input name="codigo" type="text" class="form-control" id="codigo" value="<?php echo $todo["codigo"]; ?>">
</div><button id="ingresar" type="button" class="btn btn-primary">Editar</button>
</div>
<div class="col-md-6"><div class="form-group">
  <label for="usr">Nombre:</label>
  <input name="Nombre" type="text" class="form-control" id="Nombre" value="<?php echo $todo["Nombre"]; ?>">
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