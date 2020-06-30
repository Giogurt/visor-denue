<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="ISO-8859-1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="src/jquery.table2excel.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<script>
 
	$( window ).on( "load", function() {
       $('#loadingDiv').hide();
        $('#readyDiv').show();
    });

	$(document).ready(function(){
		$('#dtData').DataTable({
			"lengthMenu": [[25, 50, 100, 500,  -1], [25, 50, 100, 500, "TODO"]],
			//"scrollX": true,
			"pagingType": "full_numbers",
			"language": {"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"}
		});
		$( "#btn_create_excel" ).click(function() {
		  //alert( "Su archivo sera descargado en breve" );
		  $("#datos_table").table2excel({
			    // exclude CSS class
			    exclude: ".noExl",
			    name: "Datos",
			    filename: "Denue_Datos.xls",
			    preserveColors: true
			  });
		});

		var table = $('#dtData').DataTable();
		if (table.data().count()) {
                $('#btn_create_excel').show();
            }
            else {
                 $('#btn_create_excel').hide();
            }
	});
</script>
<style>
.bg-4 {
  background-color: #2f2f2f;
  color: #ffffff;
}
.header.shadow {
    -webkit-box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);
  -moz-box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);
  box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);
}
body {
  height: 100vh;
}
/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: visible;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.3);
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

</style>
	<html>
	<body>
		<head>
			<title>Visor Denue</title>
		</head>
		<div>
			<nav class="navbar fixed-top navbar-light" style="background-color: black;">
				<table width="100%">
					<td><a href="visor.php"><img src="img/visor_denue.png" width="180" height="80" class="d-inline-block align-top" alt=""></a></td>
					<td><div style="color: white" align="right">
						Visor DENUE<br>
						<div style="color: red; font-style: italic; font-weight: bold; font-size: 10px">Versión Beta</div>
					</div></td>
				</table>
			</nav>
		</div>
			<br>
			<br>
			<br>
			<br>
			<br>
		<div id="loadingDiv" class="loading">
		</div>
		<div id="readyDiv" style="color: green" align="center" hidden="true">
		  <p>Listo!</p>
		</div>
		<form style="margin: 10px">
			<div class="form-row">
				<!--<div class="col">
					<label for="estado">Estado:</label>
					<input type="text" class="form-control" id="estado" name="estado" >
				</div>-->
				<div class="col">
					<label for="estado">Estado:</label>
					<?php populateEntidad(); ?>
				</div>
				<div class="col">
					<label for="municipio">Municipio:</label>
					<input type="text" class="form-control" id="municipio" name="municipio">
				</div>
				<div class="col">
					<label for="giro">Giro:</label>
					<input type="text" class="form-control" id="giro" name="giro" >
				</div>
				
			</div>
			<div class="form-row">
				<div class="col">
					<label for="nombre">Nombre del establecimiento:</label>
					<input type="text" class="form-control" id="nombre" name="nombre" >
				</div>
				<div class="col">
					<label for="per_ocu">Personas ocupadas:</label>
					<?php populatePerOcu(); ?>
				</div>
			</div>
			<br>
			<div align="right">
				<input type="submit" class="btn btn-primary" name="bucar" value="Buscar">
			</div>
		</form>
		<div style="margin: 10px;"><button name="btn_create_excel" id="btn_create_excel" class="btn btn-primary">Exportar a Excel</button></div>
		
		<div id="datos_table" style="margin: 10px">
			<?php searchData(); ?>
		</div>
	</body>
</html>

<?php


function populatePerOcu()
{
	$servername = "192.185.16.174";
	$username = "despa3_usrvisor";
	$password = "Alan2019";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	
	#$estado = preg_replace('/\s+/', '', $_GET['estado']);
	
	$sql = "select per_ocu from despa3_visorINEGI.per_ocu_ct
			order by posicion asc";

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "<select class="."form-control"." id="."per_ocu"." name="."per_ocu".">";
			echo "<option></option>";
		while($row = $result->fetch_assoc()) {
			echo "<option>".$row["per_ocu"]."</option>";
		}
		echo "</select>";
	}
	else{
		echo "<p>0 resultados</p>";
	}
}


function populateMunicipio()
{
	$servername = "192.185.16.174";
	$username = "despa3_usrvisor";
	$password = "Alan2019";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	
	#$estado = preg_replace('/\s+/', '', $_GET['estado']);
	
	$sql = "select municipio from despa3_visorINEGI.municipio_entidad_vw mevw";

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "<select class="."form-control"." id="."municipio"." name="."municipio".">";
		while($row = $result->fetch_assoc()) {
			echo "<option>".$row["municipio"]."</option>";
		}
		echo "</select>";
	}
}

function populateEntidad()
{
	$servername = "192.185.16.174";
	$username = "despa3_usrvisor";
	$password = "Alan2019";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	
	#$estado = preg_replace('/\s+/', '', $_GET['estado']);
	
	$sql = "select entidad from despa3_visorINEGI.entidades et";

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "<select class="."form-control"." id="."estado"." name="."estado".">";
		echo "<option></option>";
		while($row = $result->fetch_assoc()) {
			echo "<option>".$row["entidad"]."</option>";
		}
		echo "</select>";
	}
	else{
		echo "<p>0 resultados</p>";
	}
}

function searchData()
{

//$servername = "192.185.16.174";
//$username = "despa3_usrvisor";
//$password = "Alan2019";

$servername = "192.185.16.174";
	$username = "despa3_usrvisor";
	$password = "Alan2019";

// Create connection
$conn = new mysqli($servername, $username, $password);
if (!$conn->set_charset("utf8")) {
        #printf("Error loading character set utf8: %s\n", $conn->error);
    } else {
        #printf("Current character set: %s\n", $conn->character_set_name());
    }

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Conectado exitosamente a la base de datos!<br>";

$municipio = $_GET['municipio'];
$giro =  $_GET['giro'];
$estado =  $_GET['estado'];
$nombre =  $_GET['nombre'];
$tamaño =   $_GET['tamaño']; 
$per_ocu = $_GET['per_ocu']; 

//echo "Buscando informacion de: " . $municipio . "<br>"; 


$sql = "select dt.nom_stab, dt.raz_social, dt.nombre_act, dt.per_ocu,
concat(dt.nom_vial , ' ' , dt.tipo_v_e_1 , ' ' , dt.nom_v_e_1 ) as direccion,
dt.cod_postal, dt.municipio, dt.entidad, dt.telefono, dt.correoelec, dt.www, dt.fecha_alta from despa3_visorINEGI.datos dt
where 
dt.entidad = '" . $estado . "' 
and (dt.municipio like '%" . $municipio . "%'  or '" . $municipio . "'  is null)
and (dt.nombre_act like '%" . $giro . "%'  or '" . $giro . "' is null)
and (dt.nom_stab like '%" . $nombre . "%'  or '" . $nombre . "' is null)
and (dt.per_ocu like '%" . $per_ocu . "%'  or '" . $per_ocu . "' is null)"
;

#echo $sql."<br>";

if (!empty($estado)) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    echo "<table id="."dtData"." class="."table".">";
    echo "<thead class="."thead-dark".">
    		<tr>
    			<th scope="."col".">ESTADO</th>
    			<th scope="."col".">MUNICIPIO</th>
    			<th scope="."col".">GIRO</th>
	    		<th scope="."col".">NOMBRE DEL ESTABLECIMIENTO</th>
	    		<th scope="."col".">PERSONAS OCUPADAS</th>
	    		<th scope="."col".">TELEFONO</th>
	    		<th scope="."col".">CORREO ELECTRONICO</th>
	    		<th scope="."col".">PAGINA</th>
	    		<th scope="."col".">DIRECCION</th>
	    		<th scope="."col".">CODIGO POSTAL</th>
	    		<th scope="."col".">RAZON SOCIAL</th>
	    		<th scope="."col".">TIPO DE CENTRO ECONOMICO</th>
	    		<th scope="."col".">NOMBRE DE CENTRO ECONOMICO</th>
	    		<th scope="."col".">FECHA DE ALTA</th>
    		</tr>
    	</thead>";
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. "&nbsp" .
        //"nom_stab:" . $row["nom_stab"]. "&nbsp" .
        //"<br>";
        echo "<tr>";
        	echo "<td>".$row["entidad"]."</td>";
        	echo "<td>".$row["municipio"]."</td>";
        	echo "<td>".$row["nombre_act"]."</td>";
	        echo "<td>".$row["nom_stab"]."</td>";
	        echo "<td>".$row["per_ocu"]."</td>";
	        echo "<td>".$row["telefono"]."</td>";
	        echo "<td>".$row["correoelec"]."</td>";
	        echo "<td>".$row["www"]."</td>";
	        echo "<td>".$row["direccion"]."</td>";
	        echo "<td>".$row["cod_postal"]."</td>"; 
	        echo "<td>".$row["raz_social"]."</td>";
	        echo "<td>".$row["tipocencom"]."</td>";
	        echo "<td>".$row["nom_cencom"]."</td>";
	        echo "<td>".$row["fecha_alta"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados";
}

$conn->close();
}
else{
	 echo "La busqueda mínima es por estado";
}
}
?>