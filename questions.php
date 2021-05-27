<!---1ro se realiza la conexion a la base de datos--->
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
    
		<header>
            <img src="imagenes/UC-Horizontal-White 1.png">
        </header>
        <!---contenido del cuestionario/test--->

        <div id="questions" class="contenido">
                <section  accion="guardar" id="form1">
                    <?php
                    $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas where idpregunta=1";
                    $result=mysqli_query($conexion,$sql);
            
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                        <div >
                            <center>
                                <h2 id="pregunta">
                                    <?php echo $mostrar ['enunciado']?>
                                </h2>
                            </center> 
                            <br>                            
                        </div>
                        
                        <div id="cuestionario">
                            <center><input id="respuestaA" type="radio" name="resultado"  style="background-color:black;color:white;height:40px"><?php echo $mostrar ['opcion1']?></input></center> 
                            <br>
                            <center><input id="respuestaB" type="radio"  name="resultado" style="background-color:black;color:white;height:40px"><?php echo $mostrar ['opcion2']?></input></center> 
                            <button id="enviar">Siguiente</button>
                        </div>
                        
                        
                    <?php
                }
                ?>
                </section>
    
            <div class="footer">
            </div>
        </div>
       

</body>

</html>