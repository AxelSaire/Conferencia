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
            <input type="text" name="ticket" placeholder="Nro de ticket">
            <img class="input-icon" src="images2/ticket.svg" alt="">
        </div>
        
        <div class="input-wrapper" id="selection">
            <p class="question">¿Desea Certificado?, materiales de los ponentes, eboook con pautas de responsabilidad por edades para los hijos</p>
            <img class="input-icon" src="images2/certificate.svg" alt="">
            <div class="radio-group">
                <label>
                    <input type="radio" name="certificado" value="1" id="certificado-si"> Sí
                </label>
                <label>
                    <input type="radio" name="certificado" value="0" id="certificado-no" checked> No
                </label>
            </div>
        </div>
        
        <!-- Opciones adicionales que se mostrarán dinámicamente -->
        <div id="extra-options" style="display: none;">
            <div class="input-wrapper">
                <input type="text" name="name" placeholder="Nombre Completo">
                <img class="input-icon" src="images2/profile.svg" alt="">
            </div>

            <div class="input-wrapper">
                <input type="tel" name="phone" placeholder="Teléfono">
                <img class="input-icon" src="images2/phone.svg" alt="">
            </div>

            <div class="input-wrapper">
                <input type="email" name="email" placeholder="Email">
                <img class="input-icon" src="images2/email.svg" alt="">
            </div>

            <div class="input-wrapper">
                <input type="text" name="dni" placeholder="DNI">
                <img class="input-icon" src="images2/id-card.svg" alt="">
            </div>
        </div>
        

        
        <input type="submit" class="btn-enviar" name="register" value="Enviar">
        <button type="button" class="btn-modificar" onclick="window.location.href='modificar.php'">Modificar</button>
    </form>
    <?php 
        include("registrar.php");
    ?>
    <script src="script.js"></script>
</body>
</html>