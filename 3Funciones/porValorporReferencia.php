<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Por valor Por referencia</title>
    </head>
    <body>
        <?php
        //Parametros por valor
            function cambia_mayus($param){
                $param=strtolower($param);
                $param=ucwords($param);
                return $param;
            }
            $variable="HoLA mUnDo";
            echo cambia_mayus($variable) . "<br>";
            echo $variable;

            //Parametros por referencia
            function cambia_mayus2($param2){
                $param=strtolower($param2);
                $param=ucwords($param2);
                return $param;
            }
            $variable2="HoLA mUnDo";
            echo cambia_mayus2($variable2) . "<br>";
            echo $variable2;
        ?>
    </body>
</html>