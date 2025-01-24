<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz@14..32&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: 100vh;
            background: url('./images/fondo.png') no-repeat center center fixed;
            background-size: cover;
        }
        h2{
            font_weight: bold;
            font-size: 2.5rem;
            color: #000;
            font-family: "Nunito Sans", serif;
        }

        /* Estilo para los párrafos */
        p {
            font-size: 2rem;
            line-height: 1.6;
            margin: 10px 0;
            color: #000000;
            font-family: "Nunito Sans", serif;
        }
        .encabezado{
            display:flex;
            align-items: center; 
            flex-direction: row;
            gap:15px;
        }
        .dcp-whatsapp{
            margin-left:25vh;
            margin-right:25vh;
            display:flex;
            align-items: center; 
            flex-direction:row;
        }
        .acceso{
            display: flex;
            margin-left: 30px;
            flex-direction: column;
            justify-content: center; 
        }
        strong{
            text-transform: uppercase;
            color: #079526;
        }
        .img-paso{
            width: 12%;
            border-radius:20%;
        }

        .btn-wsp {
            display: inline-block;
            width: 300px;
            margin: 0 auto;
            padding: 12px 20px;
            font-size: 1.1rem;
            font-weight: bold;
            color: #fff;
            text-align: center;
            font-family: "Nunito Sans", serif;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background: linear-gradient(90deg, #4dcd48, #3a7928);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-wsp:hover {
            background-color: #1da955;
            transform: scale(1.05);
        }

        .btn-wsp:active {
            background-color: #128c49;
            transform: scale(0.98);
        }
        .img-wsp{
            width: 300px;
        }
        @media screen and (max-width: 768px) {
        body {
            background: url('./images/fondo.png') no-repeat center center fixed;
            background-size: cover;
            padding: 20px;
        }

        h2 {
            font-size: 1.5rem;
            text-align: center;
        }

        p {
            font-size: 1.2rem;
            text-align: center;
        }

        .encabezado {
            flex-direction: column;
            gap: 10px;
            align-items: center;
        }

        .dcp-whatsapp {
            flex-direction: column;
            margin-left: 0;
            margin-right: 0;
            align-items: center;
        }


        .img-wsp {
            width: 250px;
            margin-bottom: 20px;
        }

        .acceso {
            margin-left: 0;
            align-items: center;
            text-align: center;
        }

        .btn-wsp {
            width: 250px;
            font-size: 1rem;
        }
    }

    @media screen and (max-width: 480px) {
        h2 {
            font-size: 1.3rem;
        }

        p {
            font-size: 1rem;
        }

        .img-wsp {
            width: 200px;
        }

        .btn-wsp {
            width: 200px;
            font-size: 0.9rem;
        }
    }
    </style>
</head>
<body>
    <div class="encabezado">
        <h2>Únete al grupo de WHATSAPP del desafío</h2>
        <img src="images/paso.png" class="img-paso">
    </div>
    <div class="dcp-whatsapp">
        <img src="images/wsp.png" alt="whatsapp" class="img-wsp">
        <div class ="acceso">
            <p>Accede al grupo privado de <strong>whatsApp</strong> para recibir notificaciones, contenido de apoyo en vídeos y audios.</p>
            <a href="https://wa.me/51952139225" target="_blank">
                <buttom type="buttom" class="btn-wsp">ACCEDE A NUESTRO GRUPO DE WHATSAPP</buttom>
            </a>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>