<?php
include "conexion.php";

$NRC=$_GET["nrcsalon"];

$total=mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(nivelactref) AS TOTAL FROM tblresultados WHERE codestudiante IN(SELECT codestudiante FROM tblconsulta WHERE NRC='$NRC')"));
$activo=mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(nivelactref) AS ACTIVO FROM tblresultados WHERE codestudiante IN(SELECT codestudiante FROM tblconsulta WHERE NRC='$NRC') AND nivelactref<50"));
$reflexivo=mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(nivelactref) AS REFLEXIVO FROM tblresultados WHERE codestudiante IN(SELECT codestudiante FROM tblconsulta WHERE NRC='$NRC') AND nivelactref>50"));
$sensitivo=mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(nivelsenint) AS SENSITIVO FROM tblresultados WHERE codestudiante IN(SELECT codestudiante FROM tblconsulta WHERE NRC='$NRC') AND nivelsenint<50"));
$intuitivo=mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(nivelsenint) AS INTUITIVO FROM tblresultados WHERE codestudiante IN(SELECT codestudiante FROM tblconsulta WHERE NRC='$NRC') AND nivelsenint>50"));
$visual=mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(nivelvisver) AS VISUAL FROM tblresultados WHERE codestudiante IN(SELECT codestudiante FROM tblconsulta WHERE NRC='$NRC') AND nivelvisver<50"));
$verbal=mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(nivelvisver) AS VERBAL FROM tblresultados WHERE codestudiante IN(SELECT codestudiante FROM tblconsulta WHERE NRC='$NRC') AND nivelvisver>50"));
$secuencial=mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(nivelsecglo) AS SECUENCIAL FROM tblresultados WHERE codestudiante IN(SELECT codestudiante FROM tblconsulta WHERE NRC='$NRC') AND nivelsecglo<50"));
$global=mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(nivelsecglo) AS GLOBALA FROM tblresultados WHERE codestudiante IN(SELECT codestudiante FROM tblconsulta WHERE NRC='$NRC') AND nivelsecglo>50"));

$percentact=($activo['ACTIVO']/$total['TOTAL'])*100;
$percentref=($reflexivo['REFLEXIVO']/$total['TOTAL'])*100;
$percentsen=($sensitivo['SENSITIVO']/$total['TOTAL'])*100;
$percentint=($intuitivo['INTUITIVO']/$total['TOTAL'])*100;
$percentvis=($visual['VISUAL']/$total['TOTAL'])*100;
$percentver=($verbal['VERBAL']/$total['TOTAL'])*100;
$percentsec=($secuencial['SECUENCIAL']/$total['TOTAL'])*100;
$percentglo=($global['GLOBALA']/$total['TOTAL'])*100;

?>

<?php if($NRC!=null):?>
  
  <form role="form" id="actualizar" >

  <h2>Aula: <?php echo $NRC; ?></h2>
  <h3>Suma de estudiantes correspondiente a:</h3>
  <h4>Estilo Activo: <?php echo $activo['ACTIVO'] ?> estudiante(s)</h4>
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $percentact?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $total['TOTAL'] ?>"><?php echo $activo['ACTIVO'] ?>/<?php echo $total['TOTAL'] ?></div>
  </div>
  <h4>Estilo Reflexivo: <?php echo $reflexivo['REFLEXIVO']; ?> estudiante(s)</h4>
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $percentref?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $total['TOTAL'] ?>"><?php echo $reflexivo['REFLEXIVO'] ?>/<?php echo $total['TOTAL'] ?></div>
  </div>

  <h4>Estilo Sensitivo: <?php echo $sensitivo['SENSITIVO']; ?> estudiante(s)</h4>
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $percentsen?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $total['TOTAL'] ?>"><?php echo $sensitivo['SENSITIVO'] ?>/<?php echo $total['TOTAL'] ?></div>
  </div>
  <h4>Estilo Intuitivo: <?php echo $intuitivo['INTUITIVO']; ?> estudiante(s)</h4>
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $percentsen?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $total['TOTAL'] ?>"><?php echo $intuitivo['INTUITIVO'] ?>/<?php echo $total['TOTAL'] ?></div>
  </div>

  <h4>Estilo Visual: <?php echo $visual['VISUAL']; ?> estudiante(s)</h4>
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $percentvis?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $total['TOTAL'] ?>"><?php echo $visual['VISUAL'] ?>/<?php echo $total['TOTAL'] ?></div>
  </div>
  <h4>Estilo Verbal: <?php echo $verbal['VERBAL']; ?> estudiante(s)</h4>
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $percentver?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $total['TOTAL'] ?>"><?php echo $verbal['VERBAL'] ?>/<?php echo $total['TOTAL'] ?></div>
  </div>

  <h4>Estilo Secuencial: <?php echo $secuencial['SECUENCIAL']; ?> estudiante(s)</h4>
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $percentsec?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $total['TOTAL'] ?>"><?php echo $secuencial['SECUENCIAL'] ?>/<?php echo $total['TOTAL'] ?></div>
  </div>
  <h4>Estilo Global: <?php echo $global['GLOBALA']; ?> estudiante(s)</h4>
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $percentglo?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $total['TOTAL'] ?>"><?php echo $global['GLOBALA'] ?>/<?php echo $total['TOTAL'] ?></div>
  </div>
  
  <u><h3>Forma de procesar la informacion</h3></u>
  <h4>Estilo Activo:</h4>
  <p>El estudiante prefiere trabajar en equipo, demandando actividades que requieran la experimentaci??n activa y mostrando entusiasmo ante tareas nuevas ya que pueden experimentar, manipular, discutir, aplicar, ensayar y, as?? mismo, explicar la informaci??n a otros compa??eros.</p>
  <h4>Estilo Reflexivo:</h4>
  <p>El estudiante se centra en trabajar individualmente y, por lo tanto, le suele incomodar el trabajo grupal, ya que su actividad est?? basada en pensar, meditar, deducir, comparar y clasificar la informaci??n recibida.</p>
  
  <u><h3>Forma de percibir la informacion</h3></u>
  <h4>Estilo Sensitivo:</h4>
  <p>El estudiante preferentemente percibe la informaci??n externa o sensitiva a trav??s de algunos sentidos, en especial a trav??s de la vista mediante la observaci??n, o del o??do en la escucha, combinando los sentidos anteriormente referenciados con la identificaci??n, lectura y relato. Por eso, los alumnos m??s sensitivos se sienten c??modos aprendiendo hechos y procedimientos, pues son memor??sticos y pr??cticos.</p>
  <h4>Estilo Intuitivo:</h4>
  <p>El estudiante prefiere la teor??a, las ideas y los conceptos abstractos y les gusta reflexionar para descubrir posibilidades y relaciones. Estos estudiantes se caracterizan porque les agrada aprender hechos, facilit??ndoles solucionar problemas por m??todos bien establecidos y tienden a ser pacientes con los detalles de los trabajos, destaca su capacidad de memorizar hechos y hacer el trabajo de campo, pero les incomodan las complicaciones y sorpresas. </p>
  
  <u><h3>Canal sensorial preferido para percibir la informacion</h3></u>
  <h4>Estilo Visual:</h4>
  <p> Es de gran ayuda para el estudiante registrar la informaci??n con el uso de los contornos, textos y apuntes realizados en la pizarra y codificando con rotuladores y bol??grafos de diferentes colores para leer y resumir, as?? que para estos alumnos es importante tener una buena visi??n del aula, incluyendo el lenguaje corporal del docente.</p>
  <h4>Estilo Verbal:</h4>
  <p> El estudiante recuerda mejor la informaci??n que lee o la que escucha y, por tanto, es importante para ellos el uso de la expresi??n oral y escrita, as?? como el empleo de f??rmulas y diversos s??mbolos.</p>
  
  <u><h3>Forma de procesar el aprendizaje</h3></u>
  <h4>Estilo Secuencial:</h4>
  <p>El estudiante refleja el progreso en el aumento de la comprensi??n de la informaci??n en pasos lineales. Se puede verificar que pueden no entender el material, pero que finalmente logran hacer algo conectando l??gicamente sus partes. En este tipo de alumnos, es importante la labor docente de trabajar la comprensi??n y se debe ense??ar a tratar de solucionar un problema siguiendo caminos a trav??s de peque??os pasos l??gicos.</p>
  <h4>Estilo Global:</h4>
  <p>El estudiante refleja el progreso de su aprendizaje en que son capaces de resolver problemas complejos r??pidamente y con posterioridad captar el panorama general, pero a su vez, presentan gran dificultad para explicar c??mo lo lograron. La labor docente en estos casos es vital y compleja, porque deben ense??ar a razonar a los alumnos los problemas y explicar c??mo lograron resolverlos ya que fueron resueltos r??pidamente casi al azar.</p>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>