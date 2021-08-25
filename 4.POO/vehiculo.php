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
         //---------------------
         class camion{
             //Propiedades
             var $ruedas;
             var $color;
             var $motor;
             //Funciones
             function camion(){//Cuando la funcion tiene el mismo nombre que la clase es el metodo constructor, da el estado inicial.
                 $this->ruedas=8;
                 $this->color="gris";
                 $this->motor=2600;//Siempre que se pone $this es una forma de referirse a la clase
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
         }
        ?>