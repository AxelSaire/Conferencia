<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Registros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Registros de la Conferencia</h2>
        <?php
        include('conexion.php');
        // Consulta los datos existentes
        $consulta = "SELECT * FROM data";
        $resultado = mysqli_query($conex, $consulta);

        // Generar la tabla de datos con botón "Eliminar"
        if (mysqli_num_rows($resultado) > 0) {
            echo '<div class="table-container">
                    <table class="tabla">
                        <tr>
                            <th>Ticket</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Certificado</th>
                            <th>Teléfono</th>
                            <th>DNI</th>
                            <th>Fecha</th>
                            <th>Acción</th>
                        </tr>';
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo '<tr>
                        <td>' . $row['ticket'] . '</td>
                        <td>' . $row['nombre'] . '</td>
                        <td>' . $row['email'] . '</td>
                        <td>' . $row['certificado'] . '</td>
                        <td>' . $row['telefono'] . '</td>
                        <td>' . $row['dni'] . '</td>
                        <td>' . $row['fecha'] . '</td>
                        <td>
                            <form method="POST" action="" onsubmit="return confirm(\'¿Está seguro de eliminar este registro?\');">
                                <input type="hidden" name="ticket" value="' . $row['ticket'] . '">
                                <input type="hidden" name="eliminar" value="1">
                                <button type="submit" class="btn-eliminar">Eliminar</button>
                            </form>
                        </td>
                    </tr>';
            }
            echo '</table>
                </div>';
        } else {
            echo '<p class="no-records">No se encontraron registros</p>';
        }
        include('registrar.php');
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>