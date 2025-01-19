<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <h2>Bienvenido a la conferencia</h2>
        <p>Registro</p>
        <div class="input-wrapper">
            <input type="text" name="ticket" placeholder="Nro de ticket" >
            <img class="input-icon" src="images/name.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre Completo" >
            <img class="input-icon" src="images/name.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email" >
            <img class="input-icon" src="images/email.svg" alt="">
        </div>
        <div class="input-wrapper">
            <p class="question">¿Desea Certificado?</p>
            <select name="certificado">
                <option value=1>Si</option>
                <option value=0>No</option>
            </select>
        </div>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono" >
            <img class="input-icon" src="images/phone.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="dni" placeholder="DNI" >
            <img class="input-icon" src="images/password.svg" alt="">
        </div>
        <input type="submit" class="btn" name="register" value="Enviar">
    </form>
    <?php 
        include("registrar.php");
    ?>
<script>
    setTimeout(function() {
        const successMessage = document.getElementById('successMessage');
        const failedMessage = document.getElementById('failedMessage');
        if (successMessage) {
            successMessage.style.display = 'none';
            if (form) {
                    form.reset(); // Limpia el formulario
                }
        }
        if(failedMessage){
            failedMessage.style.display='none';
        }
    }, 1000);
</script>
</body>
</html>