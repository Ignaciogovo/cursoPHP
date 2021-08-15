<style>
    .resultado{
        color: blue;
        font-weight:bold;
        font-size:23px;
    }
</style>
<?php
               if (isset($_POST["button"])){
                $variable1=$_POST["num1"];
                $variable2=$_POST["num2"];
                $operation=$_POST["operation"];
                calculadora($operation); //Para conectar variables con una function  
               }
                function calculadora($calculo){
                    global $variable1; //----> para hacer globales estas variables
                    global $variable2;
                    if( !strnatcasecmp("suma",$calculo)){
                        $variable3=$variable1+$variable2;
                        echo "Respuesta suma $variable3";
                    }
                    if( !strnatcasecmp("resta",$calculo)){
                        $variable3=$variable1-$variable2;
                        echo "<p class='resultado'>Respuesta resta $variable3</p>";
                    }
                    if( !strnatcasecmp("multiplicación",$calculo)){
                        $variable3=$variable1*$variable2;
                        echo "Respuesta multi $variable3";
                    }
                    if( !strnatcasecmp("división",$calculo)){
                        $variable3=$variable1+$variable2;
                        echo "Respuesta divi $variable3";
                    }
                    if( !strnatcasecmp("resto",$calculo)){
                        $variable3=$variable1%$variable2;
                        echo "Respuesta  resto $variable3";
                    }
                }
        
    ?>