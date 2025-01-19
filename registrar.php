<?php
include("conexion.php");

if(isset($_POST['register'])){
    if(
        strlen($_POST['ticket']) >=1 &&
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['certificado']) &&
        strlen($_POST['phone']) >=1 &&
        strlen($_POST['dni']) >=1
    ){
            $ticket = trim($_POST['ticket']);
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $certificado = trim($_POST['certificado']);
            $phone = trim($_POST['phone']);
            $dni = trim($_POST['dni']);
            $fecha = date("d/m/y");
            $checkTicketQuery = "SELECT * FROM data WHERE ticket = '$ticket'";
            $checkTicketResult = mysqli_query($conex, $checkTicketQuery);
            
            if (mysqli_num_rows($checkTicketResult) > 0) {
                // Si el ticket ya existe, muestra un mensaje de error
                echo '<h3 class="error" id="failedMessage">Este ticket ya fue registrado</h3>';
            } else {
                // Si el ticket no existe, procede a insertar los datos
                $consulta = "INSERT INTO data(ticket, nombre, email, certificado, telefono, dni, fecha)
                             VALUES('$ticket','$name', '$email','$certificado','$phone','$dni','$fecha')";
                $resultado = mysqli_query($conex, $consulta);
            
                if ($resultado) {
                    echo '<h3 class="success" id="successMessage">Tu registro se ha completado</h3>';
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

?>