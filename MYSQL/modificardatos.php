<?php
include("C:/xampp/htdocs/PHP/conexion.php");
 //92    -->   7214378 Afonso Fagundes
 $id = 92;
 $obtencion = $conexion->prepare("select convert(int,valor) as valor from jugadores where id=?;");
 $obtencion ->execute([$id]);
 $valor =$obtencion->fetch();
 $suma = $valor["valor"]*1.3;
 $suma = round($suma);
 //echo $suma
 //$sentencia = $conexion->prepare("UPDATE jugadores set valor=? where id=?;");
 //$resultado = $sentencia->execute([$suma,$id]);
 //if ($resultado === true){
 //    echo "ok";
//}
?>