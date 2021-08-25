<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funciones predefinidas</title>
    </head>
    <body>
        <?php
            $palabra="juan";
            echo (strtoupper($palabra));
            echo "<hr> <br>";
            function suma ($num1,$num2){
                $resultado=$num1+$num2;
                return $resultado;
            }
            echo suma(7,9);
            echo "<hr> <br>";
            function frase_mayus($frase,$conversion=true){
                $frase=strtolower($frase);
                if($conversion==true){
                    $resultado=ucwords($frase);
                }else{
                    $resultado=strtoupper($frase);
                }
                return $resultado;
            }
            echo frase_mayus("esto es un problema, af af a af af af   af aafafa ñajlkfa");
        ?>

    </body>
</html>