<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "test";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM tblconsulta WHERE codestudiante NOT LIKE '' ORDER By codestudiante LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM tblconsulta WHERE codestudiante LIKE '%$q%' OR nombreest LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>Codigo</td>
    					<td>Nombre Completo</td>
    					<td>Reporte</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['codestudiante']."</td>
    					<td>".$fila['nombreest']."</td>
    					<td><imput type='button' value='Seleccionar' name='accion'></imput></td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="No se encuentran registros";
    }


    echo $salida;

    $conn->close();



?>