<?php
if(isset($_POST["dato"]) and isset($_POST["dato1"]))
{
        $dato=$_POST["dato"];
        $dato1=$_POST["dato1"];
        print_r($dato);
        print_r($dato1);
        echo "<br>";
        echo "<br>";
            if ($dato["contraseña1"]=$dato["contraseña2"] and $dato1["contraseña3"]=$dato1["contraseña4"]){
                echo "Creación de usuario aceptada";
                $union=array_merge($dato,$dato1);
                print_r($union);
                echo "<br>";
                $diferencia=array_diff($dato,$dato1);
                print_r($diferencia);
                echo "<br>";
                $informacion=array_intersect($dato,$dato1);
                print_r($informacion);
                echo "<br>";
                echo "<br>";
            }
        }
    
?>