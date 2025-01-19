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
            $consulta = "INSERT INTO data(ticket, nombre, email, certificado, telefono, dni, fecha)
                VALUES('$ticket','$name', '$email','$certificado','$phone','$dni','$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="success" id="successMessage">Tu registro se ha completado</h3>
                <?php
            }else{
                ?>
                <h3 class="error">Ocurrio un error</h3>
                <?php
            }
    }else{
        ?>
        <h3 class="error" id="failedMessage">Revisa los campos</h3>
        <?php
    }
}

?>