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
        $db_host="192.168.2.4";
        $db_nombre="prueba";
        $db_usuario="sa";
        $db_contra="12345Ab##";

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre,1336);
        if ($conexion ->connect_errno){
            echo "Conexión fallida" . mysqli_connect_error();
        }else {
            echo "Funciona creo" . mysqli_connect_error();
        }

        $consulta= "select * FROM datos_personales";
        
        $resultados=mysqli_query($conexion, $consulta);

        $fila=mysqli_fetch_row($resultados);
        echo $fila[0];
    ?>
</body>
</html>