<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandos html</title>
</head>
<body>
    <h1>Tabla condicional 1</h1>
<?php 
    function muestra($valor){
        if ($valor < 0.5){
            $color= "red";
        }else{
            $color= "blue";
        };
        echo "<td><font color='$color'>$valor</font></td></br>"; 
    };

 for ($x=0; $x<=2; $x+=0.01){
 echo "<tr>";
 muestra($x);
 muestra(sin($x));
 muestra(cos($x));
 echo "</tr>";
} 
?>
</body>
</html>