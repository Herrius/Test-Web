<?php
    $conexion=mysqli_connect ('localhost','root','','test');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Yachayqay Test</title>
        <link rel="stylesheet" href="style_procesar.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
        <script type="text/javascript" src="busqueda_individual.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body> <br>
        <center><br><a href="javascript:history.go(-1)" style="color: black;text-decoration: none" class="button">Atrás</a></center> 
       <h1 class="title" style="font-family: 'Lobster', cursive;">RESULTADOS POR ALUMNOS</h1>
        <form>
        <input type="text" class="form-control" id="caja_busqueda_individual" placeholder="Buscar..." style="width:40%; margin: auto">
        </form>
        <section id="busquedaindividual">
        </section>
        <div class="container">
            <div class="modal fade" tabindex="-1" id="modal1">
                <div class="modal-dialog modal-lg modal-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Reporte de Aula</h3>
                            <button class="close" data-dismiss='modal'>&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-4" id="graficoradar">
                                <canvas id="gradar2" width="400" height="400"></canvas>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info">Recomendaciones</button>
                            <button type="button" class="btn btn-info">Descargar Reporte</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body><br>   
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    var estilos=[];
    var nestudiantes =[];
    $.getJSON("procesar.php",
    function(data){
        data.forEach(element=>{
            estilos.push(element["estilo"])
        });
        data.forEach(element=>{
            nestudiantes.push(element["nstudiantes"])
        });
        }
    );
    var ctx = document.getElementById(gradar2);
          var myChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: estilos,
                datasets: [{
                    label: 'Numero de estudiantes',
                    data: nestudiantes,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 88, 215, 1)',
                        'rgba(245, 15, 234, 1)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(153, 88, 215, 1)',
                        'rgba(245, 15, 234, 1)'
                    ],
                    borderWidth: 3
                }]
            },
          });
</script>