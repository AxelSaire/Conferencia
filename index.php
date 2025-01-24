<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz@14..32&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
    <header class="cabecera">
    <form method="post" class="formulario">
        <div class="registro">
            <h2>Inscríbete y gana premios</h2>
        </div>
        <div class="input-wrapper">
            <input type="text" name="ticket" placeholder="INGRESE SU NÚMERO DE TICKET">
        </div>
        
        <div class="input-wrapper" id="selection">
            <p class="question">¿Desea Certificado?, materiales de los ponentes, eboook con pautas de responsabilidad por edades para los hijos</p>
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
            <p>Digite su nombre correctamente, de esta manera aparecera en el certificado</p>
            </div>
            <div class="input-wrapper">
                <input type="tel" name="phone" placeholder="Numero de celular">
            </div>

            <div class="input-wrapper">
                <input type="text" name="dni" placeholder="DNI">
            </div>
            <div class="dialogo">
                <p>Para que le enviemos estos valioso materiales que tienen un valor de 99 soles, solo por hoy ud pagara el valor de 20 nuevos soles, lo puede hacer por yape,plim, al 984-767-711 a nombre jose alvares peña 
despues envie a ese numero la captura del pago realizado. y después del evento se le enviará los materiales a su Whatssap
                </p>
            </div>
        </div>
        

        
        <input type="submit" class="btn-enviar" name="register" value="Enviar">
    </form>
    <?php 
        include("registrar.php");
    ?>
    <script src="./js/script.js"></script>
    </header>
    <body>
        <div class="about-ebook">
        <div class="beneficios">
            <h2>ebook de responsabilidad y deberes</h2>
            <h2>fomentando lo mejor de tus hijos</h2>
            <p>Los deberes y responsabilidades son pilares fundamentales en el desarrollo infantil por varias razones claves:</p>
            <ul>
                    <li>Desarrollo de habilidades prácticas</li>
                    <li>Fomento de la autoestima</li>
                    <li>Desarrollo de la responsabilidad</li>
                    <li>Promoción del trabajo en equipo</li>
                    <li>Preparación para la vida adulta</li>
            </ul>
        </div>
        <img src="images/libro.png" alt="libro" class="img-libro">
        </div>
        <div class="information">
            <h2>¿Sabes cuáles son sus responsabilidades de tus hijos, segun su edad? </h2>
            <p>en el Ebook <strong>Responsabilidades y Deberes</strong> fomentando lo mejor de tus hijos, tendrás sus responsabilidades y deberes según la edad que tenga tu hijo</p>
            <ul>
                <li>18 MESES A 3 AÑOS</li>
                <li>4 a 6 años</li>
                <li>7 a 10 años</li>
                <li>11 a 15 años</li>
                <li>16 a 18 años</li>
            </ul>
            <p>recibe gratis tu ebook, por la compra de tu certificado</p>
            <a href="index.php">
                <buttom type="buttom" class="btn-ebook">quiero ebook</buttom>
            </a>
        </div>
    </body>
    <footer>
        <h2>INFORMACIÓN BÁSICA SOBRE PROTECCIÓN DE DATOS</h2>
        <p>RESPONSABLE: La Red Mundial de Oratoria / FINALIDAD: Gestionar el envío de información, prospección comercial y dar acceso a los materiales digitales / LEGITIMACIÓN: Consentimiento del interesado / 
        Este sitio utiliza cookies propias y de terceros. Si continúas navegando, consideramos que aceptas su uso. Más información en nuestro aviso de privacidad.</p>
    </footer>
</html>