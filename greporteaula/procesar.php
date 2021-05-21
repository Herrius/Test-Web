<?php
    include 'consultas/consulta.php';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
    }

    //$NRC=$_POST['NRC'];

    $activo=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(activoreflexivo) AS ACTIVO FROM `tblresultados` WHERE activoreflexivo='Activo'"));
    $reflexivo=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(activoreflexivo) AS REFLEXIVO FROM `tblresultados` WHERE activoreflexivo='Reflexivo'"));
    $sensorial=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(sensorialintuitivo) AS SENSORIAL FROM `tblresultados` WHERE sensorialintuitivo='Sensorial'"));
    $intuitivo=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(sensorialintuitivo) AS INTUITIVO FROM `tblresultados` WHERE sensorialintuitivo='Intuitivo'"));
    $visual=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(visualverbal) AS VISUAL FROM `tblresultados` WHERE visualverbal='Visual'"));
    $verbal=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(visualverbal) AS VERBAL FROM `tblresultados` WHERE visualverbal='Verbal'"));
    $secuencial=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(secuencialglobal) AS SECUENCIAL FROM `tblresultados` WHERE secuencialglobal='Secuencial'"));
    $global=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(secuencialglobal) AS GLOBAL FROM `tblresultados` WHERE secuencialglobal='Global'"));

    $data= array(
        array(
            'estilo'=>'Activo',
            'nstudiantes'=>$activo['ACTIVO']),
        array(
            'estilo'=>'Reflexivo',
            'nstudiantes'=>$reflexivo['REFLEXIVO']),
        array(
            'estilo'=>'Sensorial',
            'nstudiantes'=>$sensorial['SENSORIAL']),
        array(
            'estilo'=>'Intuitivo',
            'nstudiantes'=>$intuitivo['INTUITIVO']),
        array(
            'estilo'=>'Visual',
            'nstudiantes'=>$visual['VISUAL']),
        array(
            'estilo'=>'Verbal',
            'nstudiantes'=>$verbal['VERBAL']),
        array(
            'estilo'=>'Secuencial',
            'nstudiantes'=>$secuencial['SECUENCIAL']),
        array(
            'estilo'=>'Global',
            'nstudiantes'=>$global['GLOBAL']));


    echo json_encode($data);
?>
