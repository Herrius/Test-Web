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
    <main class="container">
        <div class="sub_bienvenido">
            <img src="imagenes/bienvenida.png" alt="">
        </div>
        <div class="sub_bienvenido bienvenido_texto">
            <h1>BIENVENIDO</h1>
            <p>Yachayqay Test, es un sistema que brinda un test que ayuda a los estudiantes y docentes al análisis de su
                tipo de aprendizaje</p>
            </div>
         
		</div>
        <div class="footer">
          <a href="instrucciones.php" class="button1">INICIAR TEST</a>
        </div>
	</div>
</body>

</html>