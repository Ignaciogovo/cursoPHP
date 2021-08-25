<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin titulo</title>
    </head>
    <body>
        <?php 
            class coche{
                //Propiedades
                var $ruedas;
                var $color;
                var $motor;
                //Funciones
                function coche(){//Cuando la funcion tiene el mismo nombre que la clase es el metodo constructor, da el estado inicial.
                    $this->ruedas=4;
                    $this->color="";
                    $this->motor=1600;//Siempre que se pone $this es una forma de referirse a la clase
                }
                function arrancar(){
                    echo"Estoy arrancando<br>";
                }
                function girar(){
                    echo "Estoy girando<br>";
                }
                function frenar(){
                    echo "Estoy frenando<br>";
                }
                function establece_color($color_coche, $nombre_coche){
                    $this->color=$color_coche;
                    echo "El color de" . $nombre_coche . "es:" . $this->color . "<br>";
                }
            }
            $renault=new coche();
            $mazda=new coche();
            $seat=new coche();
            $mazda->girar();
            $renault->establece_color("Rojo","Renault");
            $seat->establece_color("Amarillo", "SEAT");
            echo $mazda->ruedas;
        ?>
    </body>
</html>