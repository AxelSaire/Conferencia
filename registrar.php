<?php
include("conexion.php");

if(isset($_POST['register'])){
    if(
        strlen($_POST['ticket']) >=3
    ){
            $ticket = trim($_POST['ticket']);
            $name = trim($_POST['name']);
            $certificado = trim($_POST['certificado']);
            $phone = trim($_POST['phone']);
            $dni = trim($_POST['dni']);
            $fecha = date("d/m/y");
            $checkTicketQuery = "SELECT * FROM asistencia WHERE ticket = '$ticket'";
            $checkTicketResult = mysqli_query($conex, $checkTicketQuery);
            
            if (mysqli_num_rows($checkTicketResult) > 0) {
                // Si el ticket ya existe, muestra un mensaje de error
                echo '<h3 class="error" id="failedMessage">Este ticket ya fue registrado</h3>';
            } else {
                // Si el ticket no existe, procede a insertar los datos
                $consulta = "INSERT INTO asistencia(ticket, certificado, nombre, dni, celular, fecha)
                VALUES('$ticket','$certificado','$name','$dni','$phone','$fecha')";
                $resultado = mysqli_query($conex, $consulta);
            
                if ($resultado) {
                    echo '<h3 class="success" id="successMessage">Tu registro se ha completado</h3>';
                    header('Location: whatsapp.php');
                } else {
                    echo '<h3 class="error">Ocurrió un error al registrar los datos</h3>';
                }
            }
    }else{
        ?>
        <h3 class="error" id="failedMessage">Revisa los campos</h3>
        <?php
    }
}
if(isset($_POST['eliminar']) && isset($_POST['ticket'])) {
    $ticket = $_POST['ticket'];
    $eliminar = "DELETE FROM data WHERE ticket = '$ticket'";
    
    if(mysqli_query($conex, $eliminar)) {
        session_start();
        $_SESSION['mensaje'] = "<h3 class='success' id='successMessage'>Registro eliminado correctamente</h3>";
        
        // Redireccionar a la misma página
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "<h3 class='error' id='failedMessage'>Error al eliminar el registro</h3>";
    }
}
?>