<?php
    $conexion=mysqli_connect ('localhost','root','','test');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Yachayqay Test</title>
        <link rel="stylesheet" href="style_procesar.css">
    </head>
    
    <body> <br>
        <center><br><a href="javascript:history.go(-1)" style="color: black;text-decoration: none" class="button">Atrás</a></center> 
       <h1 class="title" style="font-family: 'Lobster', cursive;">RESULTADOS GENERALES DEL ALUMNADO</h1>

        <?php
            $sql="CALL SP_BUSQUEDA_SALON";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){                         
        ?>     
        
        <div class="container">
           <br>
            <div class="card">
               <img src="img/unnamed.jpg">
               <h4><?php echo $mostrar['NRC'];?></h4>
               <p><?php echo $mostrar['Nombreasignatura'];?></p>
               
               <a href="#">Resultados</a>                  
            </div><br>
        </div><br>
        <?php

        }
        ?>
    </body><br>
</html>