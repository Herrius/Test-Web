
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="estilos/retro_docente2.css">
    <link href="js/validad.js">

    
	
    <title>Yachayqay Test</title>

    <style>

    .button1 {
      FONT-SIZE: 28px;
      text-decoration: none;
      color: White;
      font-family: Century Gothic, sans-serif;
      }
      
      h3{
        font-family: Century Gothic, sans-serif;
        text
      }
    h5{

       color: #3C3942;
       font-family: Century Gothic, sans-serif;
    }
      
    </style>
</head>
<body>
<div class="contenedor">
		<header><img src="imagenes/UC-Horizontal-White 1.png"></header>

        <div class="contenido">

            <form >
            <?php
                    $conn=mysqli_connect('localhost','root','','test');
                
                    $query = "CALL PS_MOSTRAR_RETROALIMENTACION"; 
                    
                    $salida="";
                    if (isset($_POST['retro'])) {
                        $q = $conn->real_escape_string($_POST['retro']);
                        $query = preguntas($q);
                    }
                
                    $resultado = $conn->query($query);
                
                    if ($resultado ->num_rows>0) {
                        
                        while ($fila = $resultado->fetch_assoc()) {
                            
                            
                            $salida.="
                           
                            <center><h3> ".$fila['tipo_aprendizaje']."</h3></center>
                            <center> <h5> ".$fila['retreoalimentacion']."</h5></center> ";             
                        }
                        $salida.="</tbody></table>";
                        
                    }else{
                        $salida.="No se encuentran registros";
                    }
                    echo $salida;
                    $conn->close();

                ?>
            </from>
        </div>
            <div class="footer">
                <a href= "resultados_salon.php" class="button1" > <b><i>Volver</i></b></a>
            </div>
        </div>

  </body>
</html>