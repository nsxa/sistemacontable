<?php 
include 'registros.php';


if(isset($_POST["codigo"]))
{
	
	
	$o= new registros();
	$o->insert(NULL,"7","73xx","Costo indirecto","",$_POST["codigo"]);
	$o->insert(NULL,"1","1410","Productos en proceso",$_POST["codigo"],"");
	
	
	/*balance*/
	
	/*activo*/
	/*$activo=$_POST["codigo"]+$reteiva+$retefuente+$ica+$bancos-$bancos;
	echo "Activo:".$activo;
	
	
	$pasivo=$iva-$iva+$reteiva+$retefuente+$ica;
	echo "pasivo:".$pasivo;
	
	
	$patrimonio=$activo-$pasivo;
	echo "patrimonio:".$patrimonio;*/
	
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
	
	
	
	$("#ingresar").click(function(){var codigo=$("#codigo").val();
	
	
	
	if(codigo=="")
		{
			alert("codigo vacio");
			return false;
		}
		
		
		$.ajax({
    url : "costoproduccion.php",
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
Agregar compra
</title>



<br>
<br>
<br>
<br>

<div class="container" id="content" tabindex="-1">
<form id="formregistros">

<div class="row">
  <div class="col-md-6"><div class="form-group">
  <label for="usr"><FONT SIZE=5>Costo de produccion<A/font><label>
  <input name="codigo" type="text" class="form-control" id="codigo">
</div>
<button id="ingresar" type="button" class="btn btn-primary">Ingresar</button>
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