<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,700&family=Sofia+Sans+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" class="formulario">
        <h2>Bienvenido a la conferencia</h2>
        <p>Registro de asistencia</p>
        <div class="input-wrapper">
            <input type="text" name="ticket" placeholder="Nro de ticket" >
            <img class="input-icon" src="images2/ticket.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre Completo" >
            <img class="input-icon" src="images2/profile.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email" >
            <img class="input-icon" src="images2/email.svg" alt="">
        </div>
        <div class="input-wrapper" id="selection">
            <p class="question">¿Desea Certificado?</p>
            <img class="input-icon" src="images2/certificate.svg">
            <select name="certificado">
                <option value=1>Si</option>
                <option value=0>No</option>
            </select>
        </div>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono" >
            <img class="input-icon" src="images2/phone.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="dni" placeholder="DNI" >
            <img class="input-icon" src="images2/id-card.svg" alt="">
        </div>
        <input type="submit" class="btn-enviar" name="register" value="Enviar">
        <button type="button" class="btn-modificar" onclick="window.location.href='modificar.php'">Modificar</button>
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