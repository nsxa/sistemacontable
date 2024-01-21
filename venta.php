<?php 
include 'registros.php';


if(isset($_POST["codigo"]))
{
	echo $_POST["costodeventa"];
	
	$o= new registros();
	
	$iva=($_POST["codigo"]*19)/100;
	
	$valortotal=$_POST["codigo"]+$iva;
	
	$o->insert(NULL,"1","1105","Caja",$valortotal,"0");
	
	$o->insert(NULL,"4","4135","Comercio al por mayor y nebir","0",$_POST["codigo"]);
	
	$o->insert(NULL,"2","2408","Iva generado","0",$iva);
	
	$o->insert(NULL,"6","6135","Costo de venta ",$_POST["costodeventa"],"0");
	
	$o->insert(NULL,"1","1435","Inventario","0",$_POST["costodeventa"]);
	
	
	
	
	
	
	
	
	
	echo $iva;
	
	/*
	
	
	$o->insert(NULL,"1","1435","Mercan no fabricadas por la empresa",$_POST["codigo"],"0");
	
	$o->insert(NULL,"4","4135","Comercio al por mayor menor","0",$_POST["codigo"]);
	
	
	$iva=($_POST["codigo"]*19)/100;
	
	$o->insert(NULL,"2","2408","Iva descontable",$iva,"0");
	$o->insert(NULL,"2","2408","Iva generado","0",$iva);
	
	$reteiva=($iva*15)/100;
	
	
	$o->insert(NULL,"2","2367","Reteiva","0",$reteiva);
	$o->insert(NULL,"1","135517","Reteiva",$reteiva,"0");
	
	$retefuente=($_POST["codigo"]*2.5)/100;
	
	$o->insert(NULL,"2","2365","Retefuente","0",$retefuente);
	$o->insert(NULL,"1","135515","Retefuente",$retefuente,"0");
	
	$ica=($_POST["codigo"]*3.5)/1000;
	
	
	$o->insert(NULL,"2","2368","ICA","0",$ica);
	$o->insert(NULL,"1","135518","ICA",$ica,"0");
	
	$bancos=$_POST["codigo"]+$iva-$reteiva-$retefuente-$ica;
	
	
	$o->insert(NULL,"1","1110","Bancos","0",$bancos);
	$o->insert(NULL,"1","1110","Bancos",$bancos,"0");
	*/
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
	
	
	
	$("#ingresar").click(function(){
		
		
		var codigo=$("#codigo").val();
	var costodeventa=$("#costodeventa").val();
	
	
	if(codigo=="")
		{
			alert("codigo vacio");
			return false;
		}
		
		if(costodeventa=="")
		{
			alert("costodeventa vacio");
			return false;
		}
		
		
		
		$.ajax({
    url : "venta.php",
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
Agregar venta
</title>



<br>
<br>
<br>
<br>

<div class="container" id="content" tabindex="-1">
<form id="formregistros">

<div class="row">
  <div class="col-md-6"><div class="form-group">
  <label for="usr">Valor venta:</label>
  <input name="codigo" type="text" class="form-control" id="codigo">
</div>

<div class="form-group">
  <label for="usr">Costo de venta:</label>
  <input name="costodeventa" type="text" class="form-control" id="costodeventa">
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