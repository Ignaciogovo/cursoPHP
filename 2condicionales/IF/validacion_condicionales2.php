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
    /*Como se haria con el if: 
        if($años<18){
        echo "Eres menor de edad. No tienes acceso."
    }else{
        echo "Eres mayor, tienes acceso."
    }   */
    //Como es con operador ternario.
    echo $edad<18 ?"Eres menor de edad. No tienes acceso":"Puedes acceder";
}
?>
