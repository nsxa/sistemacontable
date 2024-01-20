<?php
/*jade Persistencia */
include 'Db.php';
$tabla="registros";

$con= new Db;

$con->conectar();
$resultado=$con->consulta("SHOW COLUMNS FROM ".$tabla);

$i=0;

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $campos[$i]=$fila["Field"];
		$i++;
    }
}

$clase="
<?php
include 'Db.php';
Class ".$tabla."{";

$j=0;
while($j<$i)
{
	$clase.="Private $".$campos[$j].";";	
	$j++;
}
$j=0;
while($j<$i)
{
	$clase.="public function get".$campos[$j]."(){
	return \$this->".$campos[$j].";}";
	$j++;
}
$j=0;
while($j<$i)
{
	$clase.="public function put".$campos[$j]."($".$campos[$j]."){
	\$this->".$campos[$j]."=$".$campos[$j].";}";
	$j++;
}
$clase.="public function gettodo(){
	\$con= new Db;
	\$con->conectar();
	\$r=\$con->consulta('Select * from ".$tabla."');
	return \$r;
	}";
$j=0;
while($j<$i)
{
	$clase.="public function gettodowhere".$campos[$j]."id(\$id){
	\$con= new Db;
	\$con->conectar();
	\$r=\$con->consulta('Select * from ".$tabla." where ".$campos[$j]."=\"'.\$id.'\"');
	return \$r;
	}";
	$j++;
}
$j=0;
$clase.="public function insert(";
while($j<$i)
	{
	if($j==$i-1){
	$clase.="\$v".$j.""; 	
	}else
	{
	$clase.="\$v".$j.","; 		
	}		
	
	$j++;
	}
	
	$clase.="){
	\$con= new Db;
	\$con->conectar();
	\$r=\$con->consulta('INSERT INTO ".$tabla." (";
	$j=0;
	while($j<$i)
	{	
	
	if($j==$i-1)
	{
		$clase.=''.$campos[$j].'';	
		
	}else
		{
	$clase.=''.$campos[$j].',';	
		}
	$j++;
	}
	$clase.=") VALUES (";
	$j=0;
	
	while($j<$i)
	{	
	if($j==$i-1)
	{
		$clase.="\"'.\$v$j.'\"";	
		
	}else
		{
			if($j==0)
			{
				$clase.='NULL,';
			}else{
			$clase.="\"'.\$v$j.'\",";	
			}
		}
	$j++;
	}
	
	
	$clase.=")');
	return \$r;
	}";
	
$clase.="public function update(\$id,";
	$j=0;
while($j<$i)
	{
	if($j==$i-1){
	$clase.="\$v".$j.""; 	
	}else
	{
	$clase.="\$v".$j.","; 		
	}		
	
	$j++;
	}
	$clase.=")
	{
	\$con= new Db;
	\$con->conectar();
	\$r=\$con->consulta('UPDATE ".$tabla." SET ";
	$j=0;
	while($j<$i)
	{
	if($j==$i-1)
	{
	$clase.=$campos[$j]."=\"'.\$v".$j.".'\" ";	
	}	else
	{
	$clase.=$campos[$j]."=\"'.\$v".$j.".'\", ";	
	}		
	
	$j++;
	
	}
	
	$clase.="WHERE ".$campos[0]." = '.\$v0);}";
	$clase.="
	public function delete(\$idnombre,\$id){
	\$con= new Db;
	\$con->conectar();
	\$r=\$con->consulta(\"DELETE FROM ".$tabla." WHERE \".\$idnombre.\" = \".\$id.\"\");	
		
	}";
	
	$clase.="} ?>";



file_put_contents($tabla.".php",$clase);

//echo $campos[$i-1];
echo "ok per";

$index="
<?php
include '".$tabla.".php';

\$t= new ".$tabla.";

\$r= \$t->gettodo();


?>
<html>
<link href=\"bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"docs.min.css\" rel=\"stylesheet\">
<link href=\"paginate.css\" rel=\"stylesheet\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js\"></script>
<script>
$(document).ready(function(){

   $('#tabla').DataTable( {
        \"language\": {
			\"search\":         \"Buscar:\",
            \"lengthMenu\": \"Mostrando _MENU_ registros por página\",
            \"zeroRecords\": \"0 registros\",
            \"info\": \"Mostrando página _PAGE_ de _PAGES_\",
            \"infoEmpty\": \"No hay registros disponibles\",
            \"infoFiltered\": \"(filtrado de _MAX_ del total de registros)\",
			\"paginate\": {
                \"first\":      \"Primero\",
                \"previous\":   \"Anterior\",
                \"next\":       \"Siguiente\",
                \"last\":       \"Ultimo\"
            },
        }
    } );
});
</script>
<title>
".$tabla."
</title>

<nav class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\">
  <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"#\">Link</a></li>
		</ul>
    </div>
</nav>

<br>
<br>
<br>
<br>
<br>
<div class=\"container\" id=\"content\" tabindex=\"-1\">
<table class=\"table\" id=\"tabla\">
<thead>
<tr style=\"background-color: #3399cc;
    color:white;\">";
$j=0;
	while($j<$i)
	{
		$index.="<th>".$campos[$j]."</th>";
		$j++;
	}
$index.="<th>Editar</th><th>Borrar</th>";	
$index.="</tr>
</thead>
<tbody>
<?php

while (\$row = mysqli_fetch_assoc(\$r)) {
    echo \"<tr style='background-color:white;'>";
		$j=0;
	while($j<$i)
	{
		
		$index.="<td>\".\$row[\"".$campos[$j]."\"].\"</td>";
		$j++;
	}
	$index.='";';
	$index.="
	echo \"<td><a href='edit".$tabla.".php?id=\".\$row[\"".$campos[0]."\"].\"'><img src='edit.png'></img></a></td><td><a href='delete".$tabla.".php?id=\".\$row[\"".$campos[0]."\"].\"'><img src='delete.png'></img></a></td>\";";
	$index.= "echo \"</tr>\";
}
?>
</tbody>
<tfoot>
<tr style=\"background-color: #3399cc;
    color:white;\">";
$j=0;
	while($j<$i)
	{
		$index.="<th>".$campos[$j]."</th>";
		$j++;
	}
$index.="<th>Editar</th><th>Borrar</th>";	
$index.="</tr>
</tfoot>
</table>
</div>
</html>";

file_put_contents("index".$tabla.".php",$index);
// ADD

$add="<?php 
include '".$tabla.".php';

if(isset(\$_POST[\"".$campos[1]."\"]))
{
	\$o= new ".$tabla."();
	\$o->insert(NULL,";
	$j=0;
	while($j<$i)
	{
	if($j!=0)
	{
		if($j==$i-1)
		{
			$add.="\$_POST[\"".$campos[$j]."\"]";
		}
		else 
		{
			$add.="\$_POST[\"".$campos[$j]."\"],";
		}
	}
	$j++;
	}
	$add.=");
	echo \"ok\";
	
}else 
{

?>
<html>
<link href=\"bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"docs.min.css\" rel=\"stylesheet\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
<script>
$(document).ready(function(){

	$(\"#ingresar\").click(function(){";
	$j=0;
	while($j<$i)
	{
	if($j!=0)
		{
		$add.="var ".$campos[$j]."=$(\"#".$campos[$j]."\").val();";
		}
		$j++;
	}
	$j=0;
	while($j<$i)
	{
	if($j!=0)
		{
		$add.="if(".$campos[$j]."==\"\")
		{
			alert(\"".$campos[$j]." vacio\");
			return false;
		}";
		}
		$j++;
	}
		
		$add.="
		
		
		$.ajax({
    url : \"add".$tabla.".php\",
    type: \"POST\",
    data : $(\"#form".$tabla."\").serialize(),
    success: function(r)
    {
        $(\"#response\").html(r);
    },
});
		
});

});
</script>
<title>
Agregar ".$tabla."
</title>

<nav class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\">
  <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"#\">Link</a></li>
		</ul>
    </div>
</nav>

<br>
<br>
<br>
<br>

<div class=\"container\" id=\"content\" tabindex=\"-1\">
<form id=\"form".$tabla."\">

<div class=\"row\">";
$j=0;
	while($j<$i)
	{
		if($j!=0)
		{
			if($j%2==0)
			{
			$pares[]=$campos[$j];	
			}else{
			$impares[]=$campos[$j];
			}
		
		}
		$j++;
	}
$add.="
  <div class=\"col-md-6\">";
  
  foreach($impares as $x)
  {
	  $add.="<div class=\"form-group\">
  <label for=\"usr\">".$x.":</label>
  <input name=\"".$x."\" type=\"text\" class=\"form-control\" id=\"".$x."\">
</div>";
  }  
  
$add.="<button id=\"ingresar\" type=\"button\" class=\"btn btn-primary\">Ingresar</button>
</div>
<div class=\"col-md-6\">";
  
  foreach($pares as $p)
  {
	  $add.="<div class=\"form-group\">
  <label for=\"usr\">".$p.":</label>
  <input name=\"".$p."\" type=\"text\" class=\"form-control\" id=\"".$p."\">
</div>";
  } 
  
   $add.="
  </div>
</div>

</form>
<div id=\"response\">
</div>
</div>
</html>
<?php

}

?>";

file_put_contents("add".$tabla.".php",$add);

$delete="<?php
include '".$tabla.".php';

	if(isset(\$_GET[\"id\"]))
	{
	
	\$u= new ".$tabla.";
	\$u->delete(\"".$campos[0]."\",\$_GET[\"id\"]);
	echo \"ok\";
	header('Location: index".$tabla.".php');
	}
	?>";

file_put_contents("delete".$tabla.".php",$delete);

/*-----------------------------------------------------*/

$edit="
<?php 
include '".$tabla.".php';

if(isset(\$_POST[\"".$campos[1]."\"]))
{
	\$o= new ".$tabla."();
	\$o->update(\$_POST[\"".$campos[0]."\"],";
	
	$j=0;
	while($j<$i)
	{	
		echo "entre";
		if($j==$i-1)
		{
			$edit.="\$_POST[\"".$campos[$j]."\"]";
		}else
		{
			$edit.="\$_POST[\"".$campos[$j]."\"],";
		}
		$j++;
	}
	$edit.=");
	echo \"ok\";
	
}else if(isset(\$_GET[\"id\"]))
{
	\$o= new ".$tabla."();
	\$r=\$o->gettodowhere".$campos[0]."id(\$_GET[\"id\"]);
	
	while (\$row = mysqli_fetch_assoc(\$r)) {";
		$j=0;
		while($j<$i)
		{
		echo "entra";
		$edit.="\$todo[\"".$campos[$j]."\"]=\$row[\"".$campos[$j]."\"];";
		$j++;
		}
	$edit.="	
	}
?>
<html>
<link href=\"bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"docs.min.css\" rel=\"stylesheet\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
<script>
$(document).ready(function(){
	
	$('#".$campos[0]."').prop('readonly', true);
	
	$(\"#ingresar\").click(function(){";
	$j=0;
	while($j<$i)
	{
	
		$edit.="var ".$campos[$j]."=$(\"#".$campos[$j]."\").val();";
		$j++;
	}
	$j=0;
	while($j<$i)
	{
	
		$edit.="if(".$campos[$j]."==\"\")
		{
			alert(\"".$campos[$j]." vacio\");
			return false;
		}";
		
		$j++;
	}
		
		$edit.="
		
		
		$.ajax({
    url : \"edit".$tabla.".php\",
    type: \"POST\",
    data : $(\"#form".$tabla."\").serialize(),
    success: function(r)
    {
        $(\"#response\").html(r);
    },
});
		
});

});
</script>
<title>
Editar ".$tabla."
</title>

<nav class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\">
  <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"#\">Link</a></li>
		</ul>
    </div>
</nav>

<br>
<br>
<br>
<br>

<div class=\"container\" id=\"content\" tabindex=\"-1\">
<form id=\"form".$tabla."\">

<div class=\"row\">";
$j=0;
	while($j<$i)
	{
		
			if($j%2==0)
			{
			$pares2[]=$campos[$j];	
			}else{
			$impares2[]=$campos[$j];
			}
		
		
		$j++;
	}
$edit.="
  <div class=\"col-md-6\">";
  
  foreach($pares2 as $y)
  {
	  $edit.="<div class=\"form-group\">
  <label for=\"usr\">".$y.":</label>
  <input name=\"".$y."\" type=\"text\" class=\"form-control\" id=\"".$y."\" value=\"<?php echo \$todo[\"".$y."\"]; ?>\">
</div>";
  }  
  
$edit.="<button id=\"ingresar\" type=\"button\" class=\"btn btn-primary\">Editar</button>
</div>
<div class=\"col-md-6\">";
  
  foreach($impares2 as $p)
  {
	  $edit.="<div class=\"form-group\">
  <label for=\"usr\">".$p.":</label>
  <input name=\"".$p."\" type=\"text\" class=\"form-control\" id=\"".$p."\" value=\"<?php echo \$todo[\"".$p."\"]; ?>\">
</div>";
  } 
  
   $edit.="
  </div>
</div>

</form>
<div id=\"response\">
</div>
</div>
</html>
<?php

}

?>";

file_put_contents("edit".$tabla.".php",$edit);


?>
