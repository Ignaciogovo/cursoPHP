<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejemplo2</title>
    </head>
    <body>
        <p>&nbsp;</p>
        <form name="form1" method="post" action="">
            <p>
                <label for="num1"></label>
                <input type="text" name="num1" id="num1">
                <label for="num2"></label>
                <input type="text" name="num2" id="num2">
                <label for="operation"></label>
                <select name="operation" id="operation">
                    <option>Suma</option>
                    <option>Resta</option>
                    <option>Multiplicación</option>
                    <option>División</option>
                    <option>Resto</option>
                </select>
            </p>
            <p>
                <input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
            </p>
        </form>
        <p>&nbsp;</p>
        <?php
            if (isset($_POST["button"])){
                $variable1=$_POST["num1"];
                $variable2=$_POST["num2"];
                $operation=$_POST["operation"];
                if( !strnatcasecmp("suma",$operation)){
                    $variable3=$variable1+$variable2;
                    echo "Respuesta suma $variable3";
                }
                if( !strnatcasecmp("resta",$operation)){
                    $variable3=$variable1-$variable2;
                    echo "Respuesta resta $variable3";
                }if( !strnatcasecmp("multiplicación",$operation)){
                    $variable3=$variable1*$variable2;
                    echo "Respuesta multi $variable3";
                }if( !strnatcasecmp("división",$operation)){
                    $variable3=$variable1+$variable2;
                    echo "Respuesta divi $variable3";
                }if( !strnatcasecmp("resto",$operation)){
                    $variable3=$variable1%$variable2;
                    echo "Respuesta  resto $variable3";
                }
            }
            ?>
    </body>
</html>