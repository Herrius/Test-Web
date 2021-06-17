<?php

    $connect =mysqli_connect('localhost','root','','test');


    //Inilizamos paginación ///

    //Obtenemos 'Numero' paginación via 'GET'.
    if (isset($_GET['idpregunta'])) { 
        $pagina  = $_GET['idpregunta'];     
    } else { //Por defecto inicamos la página en 1, es decir, registro numero 1.
        $pagina=1;
    }

    //Cantidad de registro a mostrar en paginación.
    $cantidad_reg=1;    
    //Localizacion SQL.
    $ubicacion = ($pagina-1) * $cantidad_reg;

    //Sentencia SQL, mostramos consejo.
    $preguntas= mysqli_query($connect,"SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas ORDER BY idpregunta LIMIT $ubicacion,$cantidad_reg");
    $registro= mysqli_fetch_array($preguntas);

    //Obtenemos datos a mostrar para la páginación.    
    $idpregunta = $registro['idpregunta'];    
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
            action="<?php if($next<=44){print 'fetch.php?idpregunta='.$next;}
            else{print 'retroalimentacion/menu_Resultados.php';}?>" >
<h3><?php echo $idpregunta;?>/44</h3>
            <h1> Yachayqay Test </h1>

            <!--  Mostramos datos para paginación -->

            <h2><?php echo $enunciado;?></h2>
            <div class="radio-toolbar">
        
         

                <input type=radio id="A" name="question" value='1' />
                <label for="A"><?php echo $opcion1;?></label>

                <input type=radio id="B" name="question" value='2' />
                <label for="B"><?php echo $opcion2;?></label> 
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
                    if ($pagina < $total_pagina ) {
                        echo "<button class='siguiente' type='submit' name='grabar' id='respuestaA'>Siguiente</button>"; 
                    }  
                    if($pagina==44){
                        echo "<button type='submit' name='grabar' class='siguiente'>Finalizar</button>"; 
                    }
                ?>
            </form>
            <!-- es la consulta que se debe llevar a store procedure -->
            <?php
                if(isset($_POST['question'])){
                    $respuesta=intval($_POST['question']);
                    $variable=$pagina-1;
                    $sql="UPDATE tblrespuestas SET `pregunta $variable`=$respuesta WHERE codestudiante=71444762";
                    mysqli_query($connect, $sql);
                    
                }
            ?>
            </div>
        </div>
    </div>
</body>

</html>