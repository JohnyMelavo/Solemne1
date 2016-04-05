<?php
require 'variables.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
    </head>
    <link type="text/css" rel="stylesheet" href="style.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <body>
        <?php
        require 'menu.php';
        ?>
        <form action="resumen.php" method="POST">
            <table>
                <tr>
                    <td>RUT:</td>
                    <td><input type="text" id="rut" name="rut" required="true"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" id="nombre" name="nombre" required="true"></td>
                </tr>
                <tr>
                    <td>Tipo Atención</td>
                    <td><select id="tipoAtencion" name="tipoAtencion" required="true">
                            <option value="">Seleccione...</option>
                            <option value='AT001'>Desarrollador Dolores leves AT001</option>
                            <option value='AT002'>Complicaciones menores AT002</option>
                            <option value='AT003'>Grave AT003</option>
                            <option value='AT004'>Muy Grave AT004</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Fecha Atención</td>
                    <td><input type="date" id="fecha" value=".\validar()" name="fecha" required="true"</td>
                </tr>
                <tr>
                    <td>Especialista a cargo</td>
                    <td><input type="text" id="especialista"name="especialista" required="true"</td>
                </tr>
                <tr>
                    <td>Comentarios</td>
                    <td><input type="text" id="comentarios"name="comentarios"</td>
                </tr>
                <tr>
                    <td><input type="submit" id="guardar" value="GUARDAR" onclick="validar()"</td>
                </tr>
            </table>
        </form>
    </body>
    <script type="text/javascript">
        function validar() {
            var cod = $("#codigo").val();
            if (cod === "") {
                alert("Defina valor");
                return false;
            }
        }
        function formatoFecha() {
            var f = new Date();
            var fecha = f.getDate() + "/" + f.getMonth() + "/" + f.getFullYear();
        }
    </script>
</html>
