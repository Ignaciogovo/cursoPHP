<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin titulo</title>
    </head>
    <body>
        <?php 
            include("vehiculo.php");
            $renault=new coche();
            $mazda=new coche();
            $seat=new coche();
            $pegaso=new camion();
            $mazda->girar();
            $renault->establece_color("Rojo","Renault");
            $seat->establece_color("Amarillo", "SEAT");
            echo $mazda->ruedas;
            echo "El mazda tiene" . $mazda->ruedas . "<br> El pegaso tiene " . $pegaso->ruedas . "ruedas<br>";
        ?>
    </body>
</html>