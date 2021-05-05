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
    <link rel="stylesheet" href="estilos/estilos_questions.css">
    <title>Yachayqay Test</title>
</head>
<body>

	<div class="contenedor">
		<header><img src="imagenes/UC-Horizontal-White 1.png"></header>
		<div class="contenido">
			<form >
				<?php
				$sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=5";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
				?>
				<div >
				   <center><h2><?php echo $mostrar ['idpregunta']?>.<?php echo $mostrar ['enunciado']?></h2></center> 
				   <br>				   			
				</div>

				<div>
                  <center><a href="question6.php"><input type="button" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
				   <br>
                   <center><a href="question6.php"><input type="button" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
				</div>
				<?php
			}
			?>
			</form>
		</div>


        <div class="footer">
            <h1>1 de 44</h1>
        </div>
	</div>

</body>

</html>