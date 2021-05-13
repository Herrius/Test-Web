<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/helpers.esm.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Grafico por aula</title>
  </head>
  <body>
    <div class="col-lg-12" style="padding: 20px">
        <div class="card">
            <div class="card-header">
                GRÁFICO DE ESTILOS DE APRENDIZAJE POR AULA
            </div>
            <div class="card-body">
                <input type="text" class="form-control" placeholder="Ingresar NRC de salon" style="margin: 0 0 15px 0">
                <a href="#" class="btn btn-primary">Generar Gráfico</a>
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
  </body>
</html>

 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ['Activo', 'Reflexivo', 'Sensitivo', 'Intuitivo', 'Visual', 'Verbal', 'Secuencial', 'Global'],
                datasets: [{
                    label: 'Numero de estudiantes',
                    data: [12, 19, 7, 5, 10, 8,14,10],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 3
                }]
            },
          });
          /*function CargarDatosGraficoRadar(){
            $.ajax({
              url:"controladorgrafico.php",
              type:'POST'
            }.done(function(resp){
              alert(resp);
            })*/
    </script>
