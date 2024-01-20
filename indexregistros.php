
<?php
include 'registros.php';

$t= new registros;

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
registros
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
    color:white;"><th>id</th><th>Digito</th><th>codigo</th><th>cuenta</th><th>debito</th><th>credito</th><th>Editar</th><th>Borrar</th></tr>
</thead>
<tbody>
<?php

while ($row = mysqli_fetch_assoc($r)) {
    echo "<tr style='background-color:white;'><td>".$row["id"]."</td><td>".$row["Digito"]."</td><td>".$row["codigo"]."</td><td>".$row["cuenta"]."</td><td>".$row["debito"]."</td><td>".$row["credito"]."</td>";
	echo "<td><a href='editregistros.php?id=".$row["id"]."'><img src='edit.png'></img></a></td><td><a href='deleteregistros.php?id=".$row["id"]."'><img src='delete.png'></img></a></td>";echo "</tr>";

	if($row["Digito"]=="1"){
		
		$activo=$row["debito"]-$row["credito"];
		
		$totalactivo=$totalactivo+$activo;
		
	}
	if($row["Digito"]=="2"){
		
		$pasivo=$row["credito"]-$row["debito"];
		
		$totalpasivo=$totalpasivo+$pasivo;
		
	}
	if($row["Digito"]=="3"){
		
		$patrimonio=$row["credito"]-$row["debito"];
		
		$totalpatri=$totalpatri+$patrimonio;
		
	}
	if($row["Digito"]=="4"){
		
		$ingresos=$row["credito"]-$row["debito"];
		
		$totalingre=$totalingre+$ingresos;
		
	}
	
	

}
echo "Activo=".$totalactivo;
echo "pasivo=".$totalpasivo;
$patri=$totalactivo-$totalpasivo;
$patri+$totalpatri+$patri;
echo "patrimonio=".$patri;
$balance=$patri-$totalingre;
echo "Inrgesos".$totalingre;
echo "balance".$balance;




?>
</tbody>


<tfoot>
<tr style="background-color: #3399cc;
    color:white;"><th>id</th><th>Digito</th><th>codigo</th><th>cuenta</th><th>debito</th><th>credito</th><th>Editar</th><th>Borrar</th></tr>
</tfoot>
</table>
</div>
</html>