<style>
            h1{
                text-align: center;
            }
            table{
                background-color: #ffc;
                padding: 5px;
                border: #666 5px solid;
            }
            .no_validado{
                font-size: 18px;
                color: #F00;
                font-weight: bold;
            }
            .validado{
                font-size: 18px;
                color: #0c3;
                font-weight: bold;
            }
</style>
<?php
if(isset($_POST["enviado"])){
    $nombre=$_POST["nombre_usuario"];
    $años=$_POST["edad_usuario"];
    if($años <18){
        echo "Lo siento, eres muy joven";
    }
    if($años >=18 && $años <=25){
        echo "Eres aun joven estas en la flor de la vida";
    }
    if($años >=26 && $años <=45){
        echo "Aun puedes disfrutar de tu agilidad";
    }
    if($años >=46 && $años <=65){
        echo "Te duele todo no? tranquilo, dentro de poco nunca más sufriras dolor";
    }

}
?>
