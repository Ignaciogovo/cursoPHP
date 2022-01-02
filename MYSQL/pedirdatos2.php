<?php 
include("C:/xampp/htdocs/PHP/conexion.php");
    $sql="select * from club";
    $resultados=$conexion->prepare($sql, [   //Obtener datos a partir de un cursor.
    PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
]);
$resultados->execute();
while($club=$resultados->fetchObject()){
print $club->id;
print $club->nombre;
echo"<br>";

}
echo"<br>";
echo"<br>";
$sentencia = $conexion->query("select id, nombre from jugadores "); //where id_club =2
//$datos = $sentencia->fetchAll(PDO::FETCH_OBJ);  //Obtener datos a partir de array
//print_r($datos);
//$datos2=$sentencia->fetch();
$datos2=$sentencia->fetchColumn(0);
$datos1=$sentencia->fetchColumn(0);
$datos=$sentencia->fetchObject();
$datos=$datos->nombre;

//print_r($datos);

echo $datos1;
echo"<br>";
echo $datos2;

?>