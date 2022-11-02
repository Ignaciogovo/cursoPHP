<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión con la base de datos</title>
</head>
<body>
    <?php 
        include("C:/xampp/htdocs/PHP/conexion.php");
        $conexion_sis=sqlsrv_connect($serverName,$conexioninfo);
        if($conexion_sis){
            $consulta=" SELECT nombre, id_club
                        FROM jugadores
                        WHERE id = 1";
        $stmt = sqlsrv_query($conexion_sis,$consulta);
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC()) ) {
            echo $row['nombre'].", ".$row['id_lub']."<br />";
      }
      sqlsrv_free_stmt( $stmt);
        } 
    ?>
</body>
</html>