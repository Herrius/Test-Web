<?php 
	//include 'conexion/Conexion.php';
	$conexion=mysqli_connect('localhost','root','','test');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="estilos/instrucciones.css">
    <title>Yachayqay Test</title>
</head>



<body>

	<div class="contenedor">
		<header><img src="imagenes/UC-Horizontal-White 1.png"></header>
		<div class="contenido">
            <div class="contenedor_imagen">
                <img class="bienvenida" src="imagenes/bienvenida.jpg" alt="">
            </div>
            <div class="contenedor_texto">
                <h1>BIENVENIDO</h1>
                <p>Yachayqay test, es un sistema que brinda un test 
                que ayuda a los estudiantes y docentes al análisis de su
                tipo de aprendizaje</p>
            </div>
         
		</div>
        <div class="footer">
          <a href="instrucciones.php" class="button1">INICIAR TEST</a>
        </div>
	</div>
</body>

</html>