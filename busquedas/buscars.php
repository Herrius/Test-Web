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

    $query = "SELECT * FROM tblconsultasalon WHERE NRC NOT LIKE '' ORDER By NRC LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM tblconsultasalon WHERE NRC LIKE '%$q%' OR Nombreasignatura LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>NRC</td>
    					<td>Nombre Asignatura</td>
    					<td>Reporte</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['NRC']."</td>
    					<td>".$fila['Nombreasignatura']."</td>
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