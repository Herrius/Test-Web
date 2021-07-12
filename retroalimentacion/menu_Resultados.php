<?php error_reporting(0); ?>
   <?php
    $conexion=mysqli_connect ('localhost','root','','test');
 
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <title>Resultados</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="styles/style_menu.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
            $resultado=$_GET['codigo'];
            $sql="CALL SP_MOSTRAR_RESULTADO('$resultado')";   
            $result=mysqli_query($conexion,$sql);
        
        if($row=mysqli_fetch_array($result)){
            $codestudiante=$row['codestudiante'];
// datos
            $nivelactref=$row['nivelactref'];
            $nivelsenint=$row['nivelsenint'];
            $nivelvisver=$row['nivelvisver'];
            $nivelsecglo=$row['nivelsecglo'];

            $activoreflexivo=100-$nivelactref;
           
            $sensorialintuitivo=100-$nivelsenint;
 
            $visualverbal=100- $nivelvisver;

            $secuencialglobal=100-$nivelsecglo;
 
            
          ?>         

       
        <div class="content centered-elements">
            <div>
               <br>
                <center><a style="color: black;font-size: 18px;margin-bottom: 20px;z-index: 0;font-weight: 
                700;cursor: pointer;text-align: center;font-size: 1.2rem;padding: 0.5rem 2rem;
                text-decoration: none;"><?php echo $codestudiante;?></a></center><br>
                <br>
                <div class="divisor">
                    
                    <a href="Int_Activa.php" class="btn btn--1">Activo <?php echo $activoreflexivo;?>%</a>
                    <a href="Int_Reflexivo.php" class="btn btn--1">Reflexivo <?php echo $nivelactref;?>%</a>
                    
                </div>
                <div class="divisor">
                    <a href="Int_Sensorial.php" class="btn btn--1">Sensorial <?php echo $sensorialintuitivo;?>%</a>
                    <a href="Int_Intuitiva.php" class="btn btn--1">Intuitivo <?php echo $nivelsenint;?>%</a>
                </div>
                <div class="divisor">
                    <a href="Int_Visual.php" class="btn btn--1">Visual <?php echo $visualverbal;?>%</a>
                    <a href="Int_Verbal.php" class="btn btn--1">Verbal <?php echo $nivelvisver;?>%</a>
                </div>
                <div class="divisor">
                    
                    <a href="Int_Secuencial.php" class="btn btn--1">Secuencial <?php echo $secuencialglobal;?>%</a>
                    <a href="Int_Global.php" class="btn btn--1">Global <?php echo $nivelsecglo;?>%</a> 
                
                </div>

                
                
                
                
                <a href="exel.php?codigo=<?php echo $codestudiante?>" class="btn_imprimir" type="button" value="" style="position: relative;display: block;height: 50px;width: 120px;border-radius: 50px;text-transform: uppercase;background-color: transparent;color: black;font-size: 18px;overflow: hidden;transition: all 500ms ease;border: 2px solid black;margin-bottom: 20px;z-index: 0;font-weight: 700;cursor: pointer;text-align: center;font-size: 0.7rem;padding: 0.5rem 1rem;text-decoration: none;float:left" >Descargar exel</a>
                <a href="inf/Estilos_Aprendizaje.pdf" download="EstilosdeAprendizaje.pdf" class="btn_imprimir" type="button" value="" style="position: relative;display: block;height: 50px;width: 120px;border-radius: 50px;text-transform: uppercase;background-color: transparent;color: black;font-size: 18px;overflow: hidden;transition: all 500ms ease;border: 2px solid black;margin-bottom: 20px;z-index: 0;font-weight: 700;cursor: pointer;text-align: center;font-size: 0.7rem;padding: 0.5rem 1rem;text-decoration: none;float:right" >Descargar pdf</a>
            </div>            
        </div> 
         <?php
        } 
        ?>
    </body>
</html>

<?php


?>
