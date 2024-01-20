<?php 
include 'tiposolicitud.php';

if(isset($_POST["tipo"]))
{
	$o= new tiposolicitud();
	$o->insert(NULL,$_POST["tipo"]);
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

	$("#ingresar").click(function(){var tipo=$("#tipo").val();if(tipo=="")
		{
			alert("tipo vacio");
			return false;
		}
		
		
		$.ajax({
    url : "addtiposolicitud.php",
    type: "POST",
    data : $("#formtiposolicitud").serialize(),
    success: function(r)
    {
        $("#response").html(r);
    },
});
		
});

});
</script>
<title>
Agregar tiposolicitud
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
<form id="formtiposolicitud">

<div class="row">
  <div class="col-md-6"><div class="form-group">
  <label for="usr">tipo:</label>
  <input name="tipo" type="text" class="form-control" id="tipo">
</div><button id="ingresar" type="button" class="btn btn-primary">Ingresar</button>
</div>
<div class="col-md-6">
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