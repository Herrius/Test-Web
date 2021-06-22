<?php

    $connect =mysqli_connect('localhost','root','','test');


    //Inilizamos paginación ///

    //Obtenemos 'Numero' paginación via 'GET'.
    if (isset($_GET['idpregunta'])) { 
        $pagina  = $_GET['idpregunta'];     
    } else { //Por defecto inicamos la página en 1, es decir, registro numero 1.
        $pagina=1;
    }

    #echo $_GET['email'];
    if(!empty($_GET['codigo'])){
        echo $_GET['codigo'];
    }
    $estudiante= mysqli_query($connect,"SELECT `codigo_estudiante` as codigo FROM tblprueba WHERE `codigo_estudiante`='76927894' LIMIT 1");
    $resultado=mysqli_fetch_array($estudiante);
    $codigo=$resultado['codigo'];
    //Cantidad de registro a mostrar en paginación.
    $cantidad_reg=1;    
    //Localizacion SQL.
    $ubicacion = ($pagina-1) * $cantidad_reg;

    //Sentencia SQL, mostramos consejo.
    $preguntas= mysqli_query($connect,"SELECT enunciado,opcion1,opcion2 FROM tblpreguntas ORDER BY idpregunta LIMIT $ubicacion,$cantidad_reg");
    $registro= mysqli_fetch_array($preguntas);

    //Obtenemos datos a mostrar para la páginación.    
    $enunciado = $registro['enunciado'];
    $opcion1 = $registro['opcion1'];
    $opcion2 = $registro['opcion2'];
    // los declaro para que el form lo pueda capturar
    $prev = $pagina - 1;
    $next = $pagina + 1;
?>
    <!DOCTYPE HTML>    
    <html>    
    <head>    
    <meta utfset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="estilos/preguntas.css">
    <title>Yachayqay Test</title>    
    </head>    
    <body >
    <div class="body">
        <div class="container">
            <header class="img">
                <img src="imagenes/UC-Horizontal-White 1.png">
            </header>
            <!-- para capturar los datos se necesita de un form con method post -->
            <form class="conti" method="post" 
            action="<?php if($next<=45){print 'fetch.php?idpregunta='.$next.'&codigo='. $codigo;}else{print 'retroalimentacion/menu_Resultados.php';}?>" >

            <h1> Yachayqay Test </h1>

            <!--  Mostramos datos para paginación -->
            <h2><?php if($next<=44)echo $enunciado;else echo "Gracias";?></h2>
            <div class="radio-toolbar">
                <input type=radio id="A" name="question" value='1' />
                <label for="A"><?php if($next<=44)echo $opcion1;else echo "Gracias";?></label>

                <input type=radio id="B" name="question" value='2' />
                <label for="B"><?php if($next<=44)echo $opcion2;else echo "Gracias";?></label> 
            </div>
            <div class="contenedor-siguiente">
                <?php //Creamos botoneras anterior / siguiente

                    //SQL
                    $preguntas= mysqli_query($connect,"SELECT * FROM tblpreguntas");     
                    //Total registros existentes en Base de Datos.
                    $total_filas = mysqli_num_rows($preguntas);
                    //Cantidad a mostrar en paginación.
                    $cantidad_reg=1;
                    //Calculamos total paginas. 
                    $total_pagina = ceil($total_filas / $cantidad_reg); 

                    //Calculamos botones anterior / siguiente
                   

                    //Boton 'Anterior'
                    if ($prev > 0) { 
                        echo "<a class='siguiente' href='fetch.php?idpregunta=$prev'>Anterior</a>"; 
                    }

                    //Opcional, visualizar el total de paginas, es decir, podrias crear algo similar a  < 1 2 3 4 > .       
                    // for ($i=1; $i<=$total_pagina; $i++) { 
                    //  echo "<a href='fetch.php?pagina=$i'>$i</a>"; 
                    //}

                    //Boton 'Siguiente'
                    if ($pagina <= $total_pagina ) {
                        echo "<button class='siguiente' type='submit' name='grabar' id='respuestaA'>Siguiente</button>"; 
                    }  
                    //Pagina final donde se ejecuta el proceso de guardar los resultados
                    if($pagina==45){
                        echo "<button class='siguiente' type='submit' name='grabar' id='respuestaA'>Finalizar</button>";
                        //filtrado de datos segun el tipo de estilos de aprendizaje
                        $tabla=mysqli_query($connect,"SELECT COUNT(A.id) as numero from tblprueba A INNER JOIN tblpreguntas P on A.pregunta=P.idpregunta WHERE P.tipo_pregunta='Act-Ref' and A.respuesta='2' and A.codigo_estudiante= '$codigo'");
                        $tabla2=mysqli_query($connect,"SELECT COUNT(A.id) as numero1 from tblprueba A INNER JOIN tblpreguntas P on A.pregunta=P.idpregunta WHERE P.tipo_pregunta='Sec-Glo' and A.respuesta='2' and A.codigo_estudiante= '$codigo'");
                        $tabla3=mysqli_query($connect,"SELECT COUNT(A.id) as numero2 from tblprueba A INNER JOIN tblpreguntas P on A.pregunta=P.idpregunta WHERE P.tipo_pregunta='Sen-Int' and A.respuesta='2' and A.codigo_estudiante= '$codigo'");
                        $tabla4=mysqli_query($connect,"SELECT COUNT(A.id) as numero3 from tblprueba A INNER JOIN tblpreguntas P on A.pregunta=P.idpregunta WHERE P.tipo_pregunta='Vis-Ver' and A.respuesta='2' and A.codigo_estudiante= '$codigo'");
                        //capturar el valor numero del conteo
                        $interprete= mysqli_fetch_array($tabla);
                        $interprete2= mysqli_fetch_array($tabla2);
                        $interprete3= mysqli_fetch_array($tabla3);
                        $interprete4= mysqli_fetch_array($tabla4);
                        //calcullo en porcentajes
                        $reflexivo=intval(($interprete['numero']/11)*100);
                        $global=intval(($interprete2['numero1']/11)*100);
                        $intuitivo=intval(($interprete3['numero2']/11)*100);
                        $verbal=intval(($interprete4['numero3']/11)*100);
                        //envio a la base de datos
                        $respuestas="INSERT INTO tblresultados(`codestudiante`,`nivelactref`,`nivelsenint`,`nivelvisver`,`nivelsecglo`) VALUES('76927894','$reflexivo','$intuitivo','$verbal','$global')";
                        mysqli_query($connect,$respuestas);
                    }

                ?>
            </form>
            <!-- es la consulta que se debe llevar a store procedure -->
            <?php
                
                if(isset($_POST['question'])){
                    $respuesta=intval($_POST['question']);
                    $variable=$pagina-1;
                    $sql="UPDATE tblprueba SET `respuesta`='$respuesta' WHERE codigo_estudiante='76927894' AND pregunta='$variable'";
                    mysqli_query($connect, $sql);
                     }
            ?>
            </div>
        </div>
    </div>
</body>

</html>