<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Ricardo Santiago Tomé">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
        <link rel="icon" type="image/png" sizes="96x96" href="../../webroot/images/favicon-96x96.png">
        <title>PHP info()</title>
        <style>
            *{
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            html, body {
                height: 100%;
            }
            body{
                height: 100%;
                background-color: #fbfaf8;
            }
            #github,#linkedin,#curriculum{
                text-decoration: none;
            }
            #github:before{
                font-family: 'Fontawesome';
                content:'\f09b';
                background-color:#FFC9B5;
                font-size: 2em;
                border-radius: 50%;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            #linkedin:before{
                color: #FFC9B5;
                font-family: 'FontaWesome';
                content: '\f08c';
                font-size: 2em;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            #curriculum:before{
                color: #FFC9B5;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            #linkedin{
                color: #FFC9B5;
            }
            #curriculum span{
                color: #FFC9B5;
                font-size: 30px;
                padding-top: 10px;
                padding-left: 0.75em;
            }
            #github,#linkedin{
                padding-left: 2em;
                padding-top: 10px;
            }
            footer{
                position:fixed;
                display: flex;
                float: left;
                bottom: 0;
                width: 100%;
                margin-top:10px;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                background-color: #516D99;
                z-index: 2;
                justify-content: center;
                color:#F5FEFF;
                background: rgb(2,0,40);
                background: linear-gradient(90deg, rgba(2,0,40,1) 0%, rgba(81,109,153,1) 100%, rgba(251,250,248,1) 100%);
            }
            #enlaceprincipal{
                color: #fbfaf8;
                margin-left: 2em;
                margin-top: 1em;
            }
        </style>
    </head>
    <body>
        <main>
            <div>
                <h1 style="color:#ffcc00; font-size: 40px;text-align: center; font-weight:bold"><?php
                    echo "Información de PHP";
                    ?></h1>
                <h2 style="color:#66cc00; font-size: 30px;text-align: center; font-weight:bold"><?php
                    echo "Ofrecida por Ricardo";
                    ?></h2>
                <?php phpinfo(); ?>
            </div>
        </main>
        <footer>
            <p>2022-23  IES LOS SAUCES. Ricardo Santiago Tomé © Todos los derechos reservados</p>
            <a href="https://github.com/RicardoSantom" target="blank"  class="enlaces" id="github" title="RicardoSantom en GitHub">
            </a>
            <a href="https://www.linkedin.com/in/ricardo-santiago-tom%C3%A9/" id="linkedin" title="Ricardo Santiago Tomé en Linkedim" target="_blank"></a>
            <a href="doc/curriculumRicardo.pdf" class="material-icons" title="Curriculum Vitae Ricardo Santiago Tomé" target="_blank" id="curriculum"><span class="material-icons md-18">&#xE87C;</span></a>
            <a href="../index.html" title="Enlace a Index Principal">Página principal</a>
        </footer>
    </body>
</html>
