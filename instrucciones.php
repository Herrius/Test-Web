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

    <style>
.accordion {
  background-color: #ccc; 
  color: black;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: black;
  color:white;
}


.accordion:after {
    content: '\002B';
    color: black;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  }

  .active:after {
    content: "\2212";
  }

.panel {
  padding: 0 18px;
  background-color: while;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}


</style>

</head>



<body>

	<div class="contenedor">
		<header><img src="imagenes/UC-Horizontal-White 1.png"></header>
		<div class="instrucciones">


      <h2>Instrucciones</h2>
          <p class="espacio">Antes de iniciar con el test.</p>
          <button class="accordion">Tiempo</button>
          <div class="panel">
          <p>Para este test no existe tiempo limite. Analiza las preguntasy tomate el tiempo que necesites.</p>
          </div>

          <button class="accordion">Preguntas</button>
          <div class="panel">
          <p>La preguntas que estan en este test, ayudaran a verificar el tipo de aprendizaje que tienes.</p>
          </div>

          <button class="accordion">Respuestas</button>
          <div class="panel">
          <p>Para este test no existen respuestas correctas o erróneas. Por lo tanto se sincero en cada una de las respuestas.</p>
          </div>

          
          
    </div>
        <div class="footer">  
          <a href="fetch.php" class="button1">INICIAR TEST</a>
          </div>  

<script>
  var acc = document.getElementsByClassName("accordion");
  var i;
  
  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
    });
  }
  </script>

		</div>


	</div>

</body>

</html>