<?php error_reporting(0); ?>
<?php
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=Estilo_Aprendizaje.xls");
?>
<table>
   <center><h1>Buen día estimado participante</h1></center>
   <center><i><p>El resultado de sus estilos de aprendizaje es el siguiente:</p></i></center>
    <tr>
        <th>Aprendizaje Activo</th>
        <th>Aprendizaje Reflexivo</th>
        <th>Aprendizaje Sensorial</th>
        <th>Aprendizaje Intuitiva</th>
        <th>Aprendizaje Visual</th>
        <th>Aprendizaje Verbal</th>
        <th>Aprendizaje Secuencial</th>
        <th>Aprendizaje Global</th>
    </tr>
    <?php
        $conexion=mysqli_connect ('localhost','root','','test');
        $resultado=$_GET['codigo'];
        $sql="CALL SP_MOSTRAR_RESULTADO('$resultado')";
        $result=mysqli_query($conexion,$sql);
        while ($fila=mysqli_fetch_array($result)){

            $nivelactref=$fila['nivelactref'];
            $nivelsenint=$fila['nivelsenint'];
            $nivelvisver=$fila['nivelvisver'];
            $nivelsecglo=$fila['nivelsecglo'];

            $activoreflexivo=100-$nivelactref; 

            $sensorialintuitivo=100-$nivelsenint;

            $visualverbal=100- $nivelvisver;
            
            $secuencialglobal=100-$nivelsecglo;


            ?>
           <center><h2>Alumno <?php echo $fila[1] ?></h2></center>
            <tr>
              <td style="text-align: center;color:blue"><?php echo $activoreflexivo;?>%</td>
              <td style="text-align: center;color:blue"><?php echo $fila[2] ?>%</td>  
              <td style="text-align: center;color:blue"><?php echo $sensorialintuitivo;?>%</td>
              <td style="text-align: center;color:blue"><?php echo $fila[3] ?>%</td> 
              <td style="text-align: center;color:blue"><?php echo $visualverbal;?>%</td>  
              <td style="text-align: center;color:blue"><?php echo $fila[4] ?>%</td>  
              <td style="text-align: center;color:blue"><?php echo $secuencialglobal;?>%</td>    
              <td style="text-align: center;color:blue"><?php echo $fila[5] ?>%</td>  
            </tr>
            

        <?php }?>  
        
</table>
<table>
           <center><h2>Recomendaciones</h2></center>
            <tr>
                <th style="color: blueviolet;">Aprendizaje Activo</th>
                <th style="color:crimson;">Aprendizaje Reflexivo</th>
                <th style="color:purple;">Aprendizaje Sensorial</th>
                <th style="color:tomato;">Aprendizaje Intuitiva</th>
                <th style="color:royalblue;">Aprendizaje Visual</th>
                <th style="color:saddlebrown;">Aprendizaje Verbal</th>
                <th style="color:teal;">Aprendizaje Secuencial</th>
                <th style="color:olive;">Aprendizaje Global</th>
            </tr>
              <td style="color: blueviolet;"><p>Controlar sus impulsos y planificarse.</p></td>
              <td style="color:crimson;"><p>Actividades de análisis y reflexión</p></td>    
              <td style="color:purple;"><p>Planificar, horarios y rutinas.</p></td>
              <td style="color:tomato;"><p>Leer libros de interes</p></td>
              <td style="color:royalblue;"><p>Identificar colores,sonidos etc.</p></td> 
              <td style="color:saddlebrown;"><p>Realizar lecciones verbales</p></td> 
              <td style="color:teal;"><p>Aprender en pequeños pasos</p></td> 
              <td style="color:olive;"><p>Aprender en grandes saltos</p></td> 
</table>
<table>
              <td style="color: blueviolet;"><p>Procurar estar activo, escribir y hablar.</p></td>
              <td style="color:crimson;"><p>Entender el porqué de las cosas.</p></td>    
              <td style="color:purple;"><p>Facilitar un lugar de trabajo tranquilo.</p></td>
              <td style="color:tomato;"><p>Analizar temas puntuales</p></td>
              <td style="color:royalblue;"><p>Utilizar simbolos</p></td> 
              <td style="color:saddlebrown;"><p>Utilizar materiales de lectura</p></td> 
              <td style="color:teal;"><p>Ser ordenados y lineales</p></td> 
              <td style="color:olive;"><p>Aprenden con material al azar</p></td> 
</table>
<table>
              <td style="color: blueviolet;"><p>Realizar descansos.</p></td>
              <td style="color:crimson;"><p>Leer y buscar información.</p></td>    
              <td style="color:purple;"><p>Realizar ejercicios corporales.</p></td>
              <td style="color:tomato;"><p>Se crítico con tus análisis</p></td>
              <td style="color:royalblue;"><p>Se observador. </p></td> 
              <td style="color:saddlebrown;"><p>Resolver problemas matemáticos</p></td> 
              <td style="color:teal;"><p>Siguir caminos pequeños pasos lógicos</p></td> 
              <td style="color:olive;"><p>Visualizan la totalidad del material</p></td> 
</table>
<table>
              <td style="color: blueviolet;"><p>Ensayar y comprobar los resultados.</p></td>
              <td style="color:crimson;"><p>Practicar y experimentar.</p></td>    
              <td style="color:purple;"><p>Identificar imágenes, colores y formas</p></td>
              <td style="color:tomato;"><p>Evalúa tus capacidades</p></td>
              <td style="color:royalblue;"><p>Material de enseñanza visual</p></td> 
              <td style="color:saddlebrown;"><p>Proyectos escritos</p></td> 
              <td style="color:teal;"><p></p></td> 
              <td style="color:olive;"><p>Resuelven problemas complejos </p></td> 
</table>
<table>
              <td style="color: blueviolet;"><p>Ensayo y error de trabajos.</p></td>
              <td style="color:crimson;"><p>Realiza proyectos creativos.</p></td>    
              <td style="color:purple;"><p>Escuchar sonidos relajantes.</p></td>
              <td style="color:tomato;"><p></p></td>
              <td style="color:royalblue;"><p>Capaz de memorizar patrones e imágenes</p></td> 
              <td style="color:saddlebrown;"><p>Proyectos de presentación</p></td> 
              <td style="color:teal;"><p></p></td> 
              <td style="color:olive;"><p>Innovadores por naturaleza</p></td> 
</table>



