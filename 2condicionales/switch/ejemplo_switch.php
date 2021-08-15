<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Condicional IF</title>
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
    </head>
    <body>
        <h1>USANDO CONDICIONALES</h1>

        <form action="validacion_switch.php" method="post" name="datos_usuario">
            <table wwidth="15%" align="center">
                <tr>
                    <td>Nombre:</td>
                    <td><label for="nombre_usuario"></label>
                <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
                </tr>
                <tr>
                    <td>contraseña:</td>
                    <td><label for="contra_usuario"></label>
                    <input type="text" name="contra" id="contra></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="enviado" id="enviado" value="enviar"></td>
                </tr>
            </table>
        </form>
    </body>
</html>