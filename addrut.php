<?php 
include 'rut.php';

if(isset($_POST["numerodeidentificacion"]))
{
	$o= new rut();
	$o->insert(NULL,$_POST["numerodeidentificacion"],$_POST["DV"],$_POST["mail"],$_POST["tipodecontribuyente"],$_POST["tipodedocumento"],$_POST["fechadeexpedicion"],$_POST["lugardeexpedicion"],$_POST["departamento"],$_POST["ciudadmunicipio"],$_POST["primerapellido"],$_POST["segundoapellido"],$_POST["primernombre"],$_POST["segundonombre"],$_POST["razonsocial"],$_POST["Nombrecomercial"],$_POST["pais"],$_POST["Direccion"],$_POST["telefono"],$_POST["telefono2"],$_POST["aeid"],$_POST["aeid2"],$_POST["ocupacion"],$_POST["responsabilidades"],$_POST["Funcionarionombre"],$_POST["cargo"]);
	echo "ok";
	
}else 
{

?>
<html>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  
  
  
<link href="bootstrap.min.css" rel="stylesheet">
<link href="docs.min.css" rel="stylesheet">

<script>
$(document).ready(function(){
	
	$("#numerodeidentificacion").on('input', function () { 
			this.value = this.value.replace(/[^0-9]/g,'');
			});
			
	$("#DV").on('input', function () { 
			this.value = this.value.replace(/[^0-9]/g,'');
			});
	$("#telefono").on('input', function () { 
			this.value = this.value.replace(/[^0-9]/g,'');
			});

	$("#telefono2").on('input', function () { 
			this.value = this.value.replace(/[^0-9]/g,'');
			});
			
			 
			 
			 
			$( "#fechadeexpedicion" ).datepicker({
  dateFormat: 'yy-mm-dd'
});



	$("#ingresar").click(function(){var numerodeidentificacion=$("#numerodeidentificacion").val();var DV=$("#DV").val();var mail=$("#mail").val();var tipodecontribuyente=$("#tipodecontribuyente").val();var tipodedocumento=$("#tipodedocumento").val();var fechadeexpedicion=$("#fechadeexpedicion").val();var lugardeexpedicion=$("#lugardeexpedicion").val();var departamento=$("#departamento").val();var ciudadmunicipio=$("#ciudadmunicipio").val();var primerapellido=$("#primerapellido").val();var segundoapellido=$("#segundoapellido").val();var primernombre=$("#primernombre").val();var segundonombre=$("#segundonombre").val();var razonsocial=$("#razonsocial").val();var Nombrecomercial=$("#Nombrecomercial").val();var pais=$("#pais").val();var Direccion=$("#Direccion").val();var telefono=$("#telefono").val();var telefono2=$("#telefono2").val();var aeid=$("#aeid").val();var aeid2=$("#aeid2").val();var ocupacion=$("#ocupacion").val();var responsabilidades=$("#responsabilidades").val();var Funcionarionombre=$("#Funcionarionombre").val();var cargo=$("#cargo").val();
	
		
	
		if(numerodeidentificacion=="")
		{
			alert("numerodeidentificacion vacio");
			return false;
		}if(DV=="")
		{
			alert("DV vacio");
			return false;
		}if(mail=="")
		{
			alert("mail vacio");
			return false;
		}if(tipodecontribuyente=="")
		{
			alert("tipodecontribuyente vacio");
			return false;
		}if(tipodedocumento=="")
		{
			alert("tipodedocumento vacio");
			return false;
		}if(fechadeexpedicion=="")
		{
			alert("fechadeexpedicion vacio");
			return false;
		}if(lugardeexpedicion=="")
		{
			alert("lugardeexpedicion vacio");
			return false;
		}if(departamento=="")
		{
			alert("departamento vacio");
			return false;
		}if(ciudadmunicipio=="")
		{
			alert("ciudadmunicipio vacio");
			return false;
		}if(primerapellido=="")
		{
			alert("primerapellido vacio");
			return false;
		}if(segundoapellido=="")
		{
			alert("segundoapellido vacio");
			return false;
		}if(primernombre=="")
		{
			alert("primernombre vacio");
			return false;
		}if(segundonombre=="")
		{
			alert("segundonombre vacio");
			return false;
		}if(razonsocial=="")
		{
			alert("razonsocial vacio");
			return false;
		}if(Nombrecomercial=="")
		{
			alert("Nombrecomercial vacio");
			return false;
		}if(pais=="")
		{
			alert("pais vacio");
			return false;
		}if(Direccion=="")
		{
			alert("Direccion vacio");
			return false;
		}if(telefono=="")
		{
			alert("telefono vacio");
			return false;
		}if(telefono2=="")
		{
			alert("telefono2 vacio");
			return false;
		}if(aeid=="")
		{
			alert("aeid vacio");
			return false;
		}if(aeid2=="")
		{
			alert("aeid2 vacio");
			return false;
		}if(ocupacion=="")
		{
			alert("ocupacion vacio");
			return false;
		}if(responsabilidades=="")
		{
			alert("responsabilidades vacio");
			return false;
		}if(Funcionarionombre=="")
		{
			alert("Funcionarionombre vacio");
			return false;
		}if(cargo=="")
		{
			alert("cargo vacio");
			return false;
		}
		
		
		$.ajax({
    url : "addrut.php",
    type: "POST",
    data : $("#formrut").serialize(),
    success: function(r)
    {
        $("#response").html(r);
    },
});
		
});

});
</script>
<title>
Agregar rut
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
<form id="formrut">

<div class="row">
  <div class="col-md-6"><div class="form-group">
  <label for="usr">numerodeidentificacion:</label>
  <input name="numerodeidentificacion" type="text" class="form-control" id="numerodeidentificacion">
</div><div class="form-group">
  <label for="usr">mail:</label>
  <input name="mail" type="text" class="form-control" id="mail">
</div><div class="form-group">
  <label for="usr">tipodedocumento:</label>
  <input name="tipodedocumento" type="text" class="form-control" id="tipodedocumento">
</div><div class="form-group">
  <label for="usr">lugardeexpedicion:</label>
  <input name="lugardeexpedicion" type="text" class="form-control" id="lugardeexpedicion">
</div><div class="form-group">
  <label for="usr">ciudadmunicipio:</label>
  <input name="ciudadmunicipio" type="text" class="form-control" id="ciudadmunicipio">
</div><div class="form-group">
  <label for="usr">segundoapellido:</label>
  <input name="segundoapellido" type="text" class="form-control" id="segundoapellido">
</div><div class="form-group">
  <label for="usr">segundonombre:</label>
  <input name="segundonombre" type="text" class="form-control" id="segundonombre">
</div><div class="form-group">
  <label for="usr">Nombrecomercial:</label>
  <input name="Nombrecomercial" type="text" class="form-control" id="Nombrecomercial">
</div><div class="form-group">
  <label for="usr">Direccion:</label>
  <input name="Direccion" type="text" class="form-control" id="Direccion">
</div><div class="form-group">
  <label for="usr">telefono2:</label>
  <input name="telefono2" type="text" class="form-control" id="telefono2">
</div><div class="form-group">
  <label for="usr">Actividad economica 2:</label>
  
  
  <!-- <input name="aeid2" type="text" class="form-control" id="aeid2">-->

<select class="form-select" id="aeid2" name="aeid2">

    <option value="1" label="4923" selected>4923 Transporte de carga por carretera</option>
    
  </select>
  

</div><div class="form-group">
  <label for="usr">responsabilidades:</label>
  <input name="responsabilidades" type="text" class="form-control" id="responsabilidades">
</div><div class="form-group">
  <label for="usr">cargo:</label>
  <input name="cargo" type="text" class="form-control" id="cargo">
</div><button id="ingresar" type="button" class="btn btn-primary">Ingresar</button>
</div>
<div class="col-md-6"><div class="form-group">
  <label for="usr">DV:</label>
  <input name="DV" type="text" class="form-control" id="DV">
</div><div class="form-group">
  <label for="usr">tipodecontribuyente:</label>
  <input name="tipodecontribuyente" type="text" class="form-control" id="tipodecontribuyente">
</div><div class="form-group">
  <label for="usr">fechadeexpedicion:</label>
  <input name="fechadeexpedicion" type="text" class="form-control" id="fechadeexpedicion">
</div><div class="form-group">
  <label for="usr">departamento:</label>
  <input name="departamento" type="text" class="form-control" id="departamento">
</div><div class="form-group">
  <label for="usr">primerapellido:</label>
  <input name="primerapellido" type="text" class="form-control" id="primerapellido">
</div><div class="form-group">
  <label for="usr">primernombre:</label>
  <input name="primernombre" type="text" class="form-control" id="primernombre">
</div><div class="form-group">
  <label for="usr">razonsocial:</label>
  <input name="razonsocial" type="text" class="form-control" id="razonsocial">
</div><div class="form-group">
  <label for="usr">pais:</label>
  <input name="pais" type="text" class="form-control" id="pais">
</div><div class="form-group">
  <label for="usr">telefono:</label>
  <input name="telefono" type="text" class="form-control" id="telefono">
</div><div class="form-group">
  <label for="usr">Actividad economica:</label>
  <!-- <input name="aeid" type="text" class="form-control" id="aeid"> -->
  
  



  <select class="select" id="aeid" name="aeid">
  
  
    <option value="1" label="4923" selected>4923 Transporte de carga por carretera</option>
    
  </select>
  
</div><div class="form-group">
  <label for="usr">ocupacion:</label>
  <input name="ocupacion" type="text" class="form-control" id="ocupacion">
</div><div class="form-group">
  <label for="usr">Funcionarionombre:</label>
  <input name="Funcionarionombre" type="text" class="form-control" id="Funcionarionombre">
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