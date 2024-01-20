
<?php
include 'rut.php';

$t= new rut;

$r= $t->gettodo();


?>
<html>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="docs.min.css" rel="stylesheet">
<link href="paginate.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){

   $('#tabla').DataTable( {
        "language": {
			"search":         "Buscar:",
            "lengthMenu": "Mostrando _MENU_ registros por página",
            "zeroRecords": "0 registros",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ del total de registros)",
			"paginate": {
                "first":      "Primero",
                "previous":   "Anterior",
                "next":       "Siguiente",
                "last":       "Ultimo"
            },
        }
    } );
});
</script>
<title>
rut
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
<br>
<div class="container" id="content" tabindex="-1">
<table class="table" id="tabla">
<thead>
<tr style="background-color: #3399cc;
    color:white;"><th>id</th><th>numerodeidentificacion</th><th>DV</th><th>mail</th><th>tipodecontribuyente</th><th>tipodedocumento</th><th>fechadeexpedicion</th><th>lugardeexpedicion</th><th>departamento</th><th>ciudadmunicipio</th><th>primerapellido</th><th>segundoapellido</th><th>primernombre</th><th>segundonombre</th><th>razonsocial</th><th>Nombrecomercial</th><th>pais</th><th>Direccion</th><th>telefono</th><th>telefono2</th><th>Actividad economica</th><th>Actividad economica 2</th><th>ocupacion</th><th>responsabilidades</th><th>Funcionarionombre</th><th>cargo</th><th>Editar</th><th>Borrar</th></tr>
</thead>
<tbody>
<?php

while ($row = mysqli_fetch_assoc($r)) {
    echo "<tr style='background-color:white;'><td>".$row["id"]."</td><td>".$row["numerodeidentificacion"]."</td><td>".$row["DV"]."</td><td>".$row["mail"]."</td><td>".$row["tipodecontribuyente"]."</td><td>".$row["tipodedocumento"]."</td><td>".$row["fechadeexpedicion"]."</td><td>".$row["lugardeexpedicion"]."</td><td>".$row["departamento"]."</td><td>".$row["ciudadmunicipio"]."</td><td>".$row["primerapellido"]."</td><td>".$row["segundoapellido"]."</td><td>".$row["primernombre"]."</td><td>".$row["segundonombre"]."</td><td>".$row["razonsocial"]."</td><td>".$row["Nombrecomercial"]."</td><td>".$row["pais"]."</td><td>".$row["Direccion"]."</td><td>".$row["telefono"]."</td><td>".$row["telefono2"]."</td><td>".$row["aeid"]."</td><td>".$row["aeid2"]."</td><td>".$row["ocupacion"]."</td><td>".$row["responsabilidades"]."</td><td>".$row["Funcionarionombre"]."</td><td>".$row["cargo"]."</td>";
	echo "<td><a href='editrut.php?id=".$row["id"]."'><img src='edit.png'></img></a></td><td><a href='deleterut.php?id=".$row["id"]."'><img src='delete.png'></img></a></td>";echo "</tr>";
}
?>
</tbody>
<tfoot>
<tr style="background-color: #3399cc;
    color:white;"><th>id</th><th>numerodeidentificacion</th><th>DV</th><th>mail</th><th>tipodecontribuyente</th><th>tipodedocumento</th><th>fechadeexpedicion</th><th>lugardeexpedicion</th><th>departamento</th><th>ciudadmunicipio</th><th>primerapellido</th><th>segundoapellido</th><th>primernombre</th><th>segundonombre</th><th>razonsocial</th><th>Nombrecomercial</th><th>pais</th><th>Direccion</th><th>telefono</th><th>telefono2</th><th>aeid</th><th>aeid2</th><th>ocupacion</th><th>responsabilidades</th><th>Funcionarionombre</th><th>cargo</th><th>Editar</th><th>Borrar</th></tr>
</tfoot>
</table>
</div>
</html>