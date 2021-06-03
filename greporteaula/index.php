<?php 
    include 'consultas/consulta.php';

    $conn=mysqli_connect ('localhost','root','','test');

    $salida="";
    $query="CALL SP_BUSQUEDA_SALON";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = busquedasalon($q);
    }
    $resultado= $conn->query($query);
    if($resultado->num_rows>0){
        while($fila=$resultado->fetch_assoc()){
            $salida.="<div class='container'>
            <br>
             <div class='card'>
                <img src='img/unnamed.jpg'>
                <h4>".$fila['NRC']."</h4>
                <p>".$fila['Nombreasignatura']."</p>
                <button type='button' class='btn btn-dark'data-toggle='modal' data-target='#modal1' width='50%'>Reporte</button>                  
             </div><br>
         </div><br>";
        }
    }else{
        $salida.="No se encuentran registros";
    }
    echo $salida;
    $conn->close();
?>