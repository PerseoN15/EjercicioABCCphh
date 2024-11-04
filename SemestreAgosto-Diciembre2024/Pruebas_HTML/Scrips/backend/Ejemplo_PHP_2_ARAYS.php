<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "<h3=======ARAYS=========</h3>";

$vector_Calificaciones = array();
$vector_Calificaciones[0] = 100;
$vector_Calificaciones[1] = 80;
$vector_Calificaciones[2] = 90;
$vector_Calificaciones[3] = 70;
$vector_Calificaciones[4] = 80;
$vector_Calificaciones[5] = 70;
$vector_Calificaciones[6] = 80;
var_dump($vector_Calificaciones);

echo "<br>";
echo $vector_Calificaciones[2];

for($i=0; $i<count($vector_Calificaciones); $i++){
    echo "<br>";
    echo $vector_Calificaciones[$i];
}
//obtener calificaciones
$suma = 0;
for($i=0; $i<count($vector_Calificaciones); $i++){
    $suma += $vector_Calificaciones[$i];
}
$promedio = $suma / count($vector_Calificaciones);
echo "<br>";
echo "El promedio de las calificaciones es: " . $promedio;

//cuantos por encima del promedio
$contadorEncimaPromedio = 0;
for($i=0; $i<count($vector_Calificaciones); $i++){
    if($vector_Calificaciones[$i] > $promedio){
        $contadorEncimaPromedio++;
    }
}
echo "<br>";
echo "La cantidad de calificaciones encima del promedio es: " . $contadorEncimaPromedio;

echo "<h3> ============ARAYS ASOCITATIVOS=================</h3>";
$vector_alumnos = array("Luke"=>100, "Leia"=>100, "han"=>50);
var_dump($vector_alumnos);

echo ">br>";
echo $vector_alumnos[0];

//Vector bidimencional=============================

$vector_grupo = array(
"Luke"=> array(100,90,80),
"Han"=> array(90,80,70),
"Leia"=> array(100,100,90)
);

var_dump($vector_grupo);
foreach($variable as $key => $value){
    # code...
}
/*
    Ejercicio: Encontrar
    1) Promedio del Grupo
    2) Promedio del Alumno
    3) Promedio por Materia
*/
?>
    
</body>
</html>