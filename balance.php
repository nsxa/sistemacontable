
<?php
include 'registros.php';

$t= new registros;

$r= $t->gettodo();


?>
<html>

<title>
Balance detallado
</title>



<br>
<br>
<br>
<br>
<br>
<div class="container" id="content" tabindex="-1">

<?php

while ($row = mysqli_fetch_assoc($r)) {
   /* echo "<tr style='background-color:white;'><td>".$row["id"]."</td><td>".$row["Digito"]."</td><td>".$row["codigo"]."</td><td>".$row["cuenta"]."</td><td>".$row["debito"]."</td><td>".$row["credito"]."</td>";
	echo "<td><a href='editregistros.php?id=".$row["id"]."'><img src='edit.png'></img></a></td><td><a href='deleteregistros.php?id=".$row["id"]."'><img src='delete.png'></img></a></td>";echo "</tr>";*/

	

	if($row["Digito"]=="1"){
		
			
		
		$activo=$row["debito"]-$row["credito"];
		
		$totalactivo=$totalactivo+$activo;
		
		$activoarreglo[]=$row;
		
		
		
	}
	
	
	
	if($row["Digito"]=="2"){
		
	/*	echo "Pasivos<br>";	
			echo "debito | Credito<br>";	
			echo $row["debito"]."|".$row["credito"];*/
			
		
		$pasivo=$row["credito"]-$row["debito"];
		
		$totalpasivo=$totalpasivo+$pasivo;
		
		$pasivoarreglo[]=$row;
		
		
	}
	if($row["Digito"]=="3"){
		
		$patrimonio=$row["credito"]-$row["debito"];
		
		$totalpatri=$totalpatri+$patrimonio;
		
		$patrimonioarreglo[]=$row;
	}
	if($row["Digito"]=="4"){
		
		$ingresos=$row["credito"]-$row["debito"];
		
		$totalingre=$totalingre+$ingresos;
		
		$ingresosarreglo[]=$row;
		
	}
	
	if($row["Digito"]=="5"){
		
		$gasto=$row["debito"]-$row["credito"];
		
		$totalgasto=$totalgasto+$gasto;
		
		$gastoarreglo[]=$row;
		
		
	}
	
	
	if($row["Digito"]=="6"){
		
		$costo=$row["debito"]-$row["credito"];
		
		$totalcosto=$totalcosto+$costo;
		
		$costoarreglo[]=$row;
		
	}
	
	

}

echo "Activo <br> codigo | Cuenta | Debe | Haber <br>";
	
	foreach($activoarreglo as $miactivo){
		
		
		echo $miactivo["codigo"]." | ".$miactivo["cuenta"]." | ".$miactivo["debito"]."  ||  ".$miactivo["credito"]."<br>";
	}
echo "Total Activo: ".$totalactivo;

echo "<br>";

echo "Pasivo <br> codigo | Cuenta | Debe | Haber <br>";
	
	foreach($pasivoarreglo as $mipasivo){
		
		
		echo $mipasivo["codigo"]." | ".$mipasivo["cuenta"]." | ".$mipasivo["debito"]."  ||  ".$mipasivo["credito"]."<br>";
	}
echo "Total Pasivo: ".$totalpasivo;

$patri=$totalactivo-$totalpasivo;
$patri=$totalpatri+$patri;
echo "<br>";

echo "Patrimonio <br> codigo | Cuenta | Debe | Haber <br>";
	
	foreach($patrimonioarreglo as $mipatrimonio){
		
		
		echo $mipatrimonio["codigo"]." | ".$mipatrimonio["cuenta"]." | ".$mipatrimonio["debito"]."  ||  ".$mipatrimonio["credito"]."<br>";
	}
echo "Total Patrimonio: ".$patri;

echo "<br>";

echo "Ingresos <br> codigo | Cuenta | Debe | Haber <br>";
	
	foreach($ingresosarreglo as $miingreso){
		
		
		echo $miingreso["codigo"]." | ".$miingreso["cuenta"]." | ".$miingreso["debito"]."  ||  ".$miingreso["credito"]."<br>";
	}
echo "Total Ingresos: ".$totalingre;

echo "<br>";

echo "Gastos <br> codigo | Cuenta | Debe | Haber <br>";
	
	foreach($gastoarreglo as $migasto){
		
		
		echo $migasto["codigo"]." | ".$migasto["cuenta"]." | ".$migasto["debito"]."  ||  ".$migasto["credito"]."<br>";
	}
echo "Total gastos: ".$totalgasto;

echo "<br>";

echo "Costos <br> codigo | Cuenta | Debe | Haber <br>";
	
	foreach($costoarreglo as $micosto){
		
		
		echo $micosto["codigo"]." | ".$micosto["cuenta"]." | ".$micosto["debito"]."  ||  ".$micosto["credito"]."<br>";
	}
echo "Total Costos: ".$totalcosto;





	
echo "<br><br><br>";
echo "Activo:=".$totalactivo;
echo "pasivo:=".$totalpasivo;
$patri=$totalactivo-$totalpasivo;
$patri+$totalpatri+$patri;
echo "patrimonio:=".$patri;
$balance=$patri-$totalingre+$totalcosto;
echo "Inrgesos".$totalingre;

echo "Costos:".$totalcosto;

echo "gasto:".$totalgasto;

$balance=$balance-$totalgasto;
echo "balance:".$balance;




?>

</div>
</html>