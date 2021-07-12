<link rel="stylesheet" href="style_procesar.css">
<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from tblconsultasalon where nrcsalon like '%$_GET[s]%' or Nombreasignatura like '%$_GET[s]%'";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<?php while ($r=$query->fetch_array()):?>
	<div class="container">
           <br>
            <div class="card">
               <img src="img/unnamed.jpg">
               <h4><?php echo $r['nrcsalon'];?></h4>
               <p><?php echo $r['Nombreasignatura'];?></p>
               <a data-nrcsalon="<?php echo $r['nrcsalon'];?>" class="btn btn-edit btn-sm btn-dark" style="font-size=40px;">Obtener Reporte</a>                  
            </div><br>
        </div><br>
<?php endwhile;?>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

  <!-- Modal -->
  <script>
  	$(".btn-edit").click(function(){
  		nrcsalon = $(this).data("nrcsalon");
  		$.get("./php/formulario.php","nrcsalon="+nrcsalon,function(data){
  			$("#form-edit").html(data);
  		});
  		$('#editModal').modal('show');
  	});
  </script>
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Reporte</h4>
        </div>
        <div class="modal-body">
        <div id="form-edit"></div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->