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
    $contra=$_POST["contra"];
    switch(true){
        case $nombre=="Juan" && $contra=="1234";
            echo "Usuario encontrado";
            break;  
        case $nombre=="Paco" && $contra=="12345";
            echo "Usuario encontrado";
            break;
        default;
        echo "Usuario  o contraseña erroneos";
    }
}
?>