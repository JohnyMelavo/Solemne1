<?php
$rut = $_POST["rut"];
$nombre = $_POST["nombre"];
$tipoAtencion = $_POST["tipoAtencion"];
$fecha = $_POST["fecha"];
$especialista = $_POST["especialista"];
$comentarios = $_POST["comentarios"];
?>

<b><table border="0">
        <tbody>
            <tr>
                <td>Rut:  </td>
                <td><?= $rut; ?></td>
            </tr>
            <tr>
                <td>Nombre: </td>
                <td><?= $nombre; ?></td>
            </tr>
            <tr>
                <td>Tipo Atencion</td>
                <td><?= $tipoAtencion; ?></td>
                <td>Derivar a otro centro especializado</td>
            </tr>
            <tr>
                <td>Fecha Atencion: </td>
                <td><?= $fecha; ?></td>
            </tr>
            <tr>
                <td>Especialista a cargo: </td>
                <td><?= $especialista; ?></td>
            </tr>
            <tr>
                <td>Comentarios: </td>
                <td><?= $comentarios; ?></td>
            </tr>
        </tbody>
    </table>

    <script type="text/javascript">
        function mensaje() {
        if $tipo === AT004)
                echo "Derivar a otro centro especializado";
        }
    </script>


</b>