<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidencia</title>
    <style>
        @font-face {
            font-family:'LetraCheri';
            src: url('letracheri.TTF') format('truetype');
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: pink;
            height: 100vh;
            margin: 0;
        }
        ul {
            display: flex;
            margin: 0;
            padding: 0;
            position: relative;
            top: 12%;
            transform: translateY(-50%);
        }
        ul li {
            list-style: none;
            font-weight: 500;
            font-family:'LetraCheri', sans-serif;
            font-size: 10vw;
            letter-spacing: 1.5vw;
            color: #555;
            text-shadow: none;
            animation: anim 1s infinite linear;
        }
        @keyframes anim {
            0%, 18%, 30%, 70%, 90%, 100% {
                color: #555;
                text-shadow: none;
            }
            20%, 35%, 85% {
                color: #4169E1;
                text-shadow: 0 0 1vw #0047AB, 0 0 3vw #00BFFF;
            }

        }
        .indice {
            position: fixed;
            top: 30%; 
            left: 2%;
            background: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 100;
            font-family: 'LetraCheri', sans-serif;
        }
        .indice a {
            display: block;
            margin: 5px 0;
            text-decoration: none;
            color: #432B7A;
        }
        .contenedor1, .contenedor2, .contenedor3, .contenedor4 {
            background-color: #C7B8EA;
            border-radius: 10px;
            border: 1px solid #432B7A;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
        }
        .contenedor h2 {
            font-family:'LetraCheri', sans-serif;
        }
        .planeado {
            margin-top: 20px;
        }
        .contenedor1 h2, .contenedor2 h2, .contenedor3 h2, .contenedor4 h2 {
            font-family: 'LetraCheri', sans-serif;
            margin: 0; 
        }
    </style>
</head>
<body>
    <ul>
        <li>E</li>
        <li>V</li>
        <li>I</li>
        <li>D</li>
        <li>E</li>
        <li>N</li>
        <li>C</li>
        <li>I</li>
        <li>A</li>
        <li>S</li>
    </ul>
    <div class="indice">
        <h3>Índice</h3>
        <a href="#contenedor1">LENTES PARA TODOS</a>
        <a href="#contenedor2">ASILO</a>
        <a href="#contenedor3">TAPITAS</a>
        <a href="#contenedor4">ZOOLÓGICO</a>
    </div>

    <div id="contenedor1" class="contenedor1">
        <h2>LENTES PARA TODOS</h2>
        <script>
            var SeceunciaID1 = null;
            var imagen1 = 0;
            var duracion1 = 1000;
            var imagenes1 = new CreaArray(4);
            imagenes1[0].src = "gale1.jpg";
            imagenes1[1].src = "gale2.jpg";
            imagenes1[2].src = "gale3.jpg";
            imagenes1[3].src = "gale4.jpg";

            function CreaArray(n) {
                this.length = n;
                for (var i = 0; i < n; i++) {
                    this[i] = new Image();
                }
                return this;
            }

            function MostrarSecuencia1() {
                document.images["secuencia1"].src = imagenes1[imagen1].src;
                imagen1++;
                if (imagen1 == imagenes1.length) {
                    imagen1 = 0;
                }
                SeceunciaID1 = setTimeout(MostrarSecuencia1, duracion1);
            }

            function IniciarSecuencia1() {
                imagen1 = 0;
                MostrarSecuencia1();
            }
        </script>
        <p><img src="logolentes.png" id="imagen" alt="Secuencia" name="secuencia1" width="400" height="200" border=5></p>
        <h2>LO PLANEADO</h2>
        <img class="planeado" src="comic.jpg" alt="">
    </div>
    <div id="contenedor2" class="contenedor2">
        <h2>ASILO</h2>
        <p><img src="logoasilo.png" id="imagen" alt="Secuencia" width="400" height="200" border=5></p>
    </div>
    <div id="contenedor3" class="contenedor3">
        <h2>TAPITAS</h2>
        <p><img src="logotapitas.png" id="imagen" alt="Secuencia" width="400" height="200" border=5></p>
    </div>
    <div id="contenedor4" class="contenedor4">
        <h2>ZOOLÓGICO</h2>
        <script>
            var SeceunciaID2 = null;
            var imagen2 = 0;
            var duracion2 = 1000;
            var imagenes2 = new CreaArray(4);
            imagenes2[0].src = "zoo1.jpg";
            imagenes2[1].src = "zoo2.heic";
            imagenes2[2].src = "zoo3.heic";
            imagenes2[3].src = "zoo4.heic";

            function MostrarSecuencia2() {
                document.images["secuencia2"].src = imagenes2[imagen2].src;
                imagen2++;
                if (imagen2 == imagenes2.length) {
                    imagen2 = 0;
                }
                SeceunciaID2 = setTimeout(MostrarSecuencia2, duracion2);
            }

            function IniciarSecuencia2() {
                imagen2 = 0;
                MostrarSecuencia2();
            }

            window.onload = function() {
                IniciarSecuencia1();
                IniciarSecuencia2();
            };
        </script>
        <p><img src="logozoo.png" id="imagen" alt="Secuencia" name="secuencia2" width="400" height="200" border=5></p>
    </div>
</body>
</html>

