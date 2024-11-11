<?php

include_once ('controller_alumno.php');

$num_control = $_POST['caja_num_control'];
$nombre = $_POST['caja_nombre'];
$primer_ap = $_POST['caja_primer_ap'];
$segundo_ap = $_POST['caja_segundo_ap'];
$edad = $_POST['caja_edad'];
$semestre = $_POST['caja_semestre'];
$carrera = $_POST['caja_carrera'];


$dato_correctos = false;

if(isset($num_control, $nombre) && !empty($num_control) && is_numeric($num_control)){

    $dato_correctos=true;

}

if($dato_correctos){

    $alumnoDAO = new  AlumnoDAO();
    
    $res = $alumnoDAO -> cambiarAlumno($num_control, $nombre, $primer_ap, $segundo_ap, $edad, $semestre, $carrera);

    if($res)
        header('location: ../pages/bajas_cambios.php');
    else

        echo"Error";

}



?>