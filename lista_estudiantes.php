

<?php 
$conexion=mysqli_connect('localhost','root','','test');
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="estilos/retro2_alumno.css">
        
        <title>Yachayqay Test</title>
    </head>
    <style>
        h2{
            FONT-SIZE: 25px;
            font-weight: bolder;
        }
        h3 {
            FONT-SIZE: 25px; 
            font-weight: bolder;
        }

        /* Cambios sobre la propia tabla */
        table {
            border-collapse: collapse;
            border: 1px solid #ccc;
        }
        /* Espacio de relleno en celdas y cabeceras */
        td,
        th {
            padding: 10px;
        }
        /* Modificación de estilos en cabeceras */
        th {
            background: #000;
            color: #fff;
            text-transform: uppercase;
        }
        /* Modificación de estilos en celdas */
        td {
            text-align: center;
            border-bottom: 2px solid #111;
            color: #333;
            font-size: 18px;
        }
    </style>

    <body>
        <div class="contenedor">
            

            <div class="contenido">
                 <!-- Team Start -->
                <div class="team">
                    <div class="container">
                        <div class="section-header">
                       
                        <CENTER>    
                
                <div class="section-header">


                    </div> </CENTER>
                                <table >
                                <tr>
                                    <td><center><b>Código</b></center></td>
                                    <td><center><b>Apellidos y Nombres</b></center></td>
                                    <td><center><b> Retroalimentación</b></center></td>
                                    </tr>

                                    <?php  

                                    $sql="select * from tblestudiante";
                                    $result= mysqli_query($conexion,$sql);
                                    
                                    while($mostrar=mysqli_fetch_array($result)){
                                    ?>

                                    <tr>
                                    <td><?php echo $mostrar ['CodEstudiante']?></td>
                                    <td><?php echo $mostrar ['ApellidosNombres']?></td>
                                    <td><a href= "retro_estudiante.php " > <i>Retroalimentación</i></a></td>
                                    </tr>

                                <?php 
                                    }
                                ?>
                            </table>
                        

                        </div>
                    </div>
                </div>     
            </div>
         
        </div>
            

      </body>
</html>