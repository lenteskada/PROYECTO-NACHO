<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informes</title>
    <style>
        @font-face {
            font-family: 'LetraCheri';
            src: url('letracheri.TTF') format('truetype');
        }
        body {
            background: pink;
            font-family: 'LetraCheri', sans-serif;
            margin: 0; 
        }
        ul {
            position: absolute;
            top: 0; 
            left: 50%;
            transform: translate(-50%, 0); 
            display: flex;   
        }
        ul li {
            list-style: none;
            font-weight: 500;
            font-family: 'LetraCheri', sans-serif;
            font-size: 10vw;
            letter-spacing: 2.2vw;
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
            top: 10%;
            left: 5%;
            background: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 100; 
        }
        .indice a {
            display: block;
            margin: 5px 0;
            text-decoration: none;
            color: #432B7A;
        }
        .principal {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px; 
        }
        .row {
            display: flex; 
            justify-content: center;
            margin-bottom: 40px;
        }
        .contenedor1, .contenedor2, .contenedor3, .contenedor4 {
            background-color: #C7B8EA;
            width: 300px;
            padding: 20px; 
            font-family: sans-serif;
            border-radius: 10px;
            border: 1px solid #432B7A;
            margin: 20px;
            height: auto; 
            box-sizing: border-box;
        }
        .lentes, .asilo, .tapitas, .zoo {
            width: 100%; 
            height: auto;
            max-height: 200px;
            margin-top: 10px; 
        }
        .contenedor1 h2, .contenedor2 h2, .contenedor3 h2, .contenedor4 h2 {
            font-family: 'LetraCheri', sans-serif;
            margin: 0; 
        }
    </style>
</head>
<body>
    <ul>
        <li>I</li>
        <li>N</li>
        <li>F</li>
        <li>O</li>
        <li>R</li>
        <li>M</li>
        <li>E</li>
        <li>S</li>
    </ul>
    
    <div class="indice">
        <h3>Índice</h3>
        <a href="#contenedor1">LENTES PARA TODOS</a>
        <a href="#contenedor2">ASILO</a>
        <a href="#contenedor3">TAPITAS</a>
        <a href="#contenedor4">ZOOLÓGICO</a>
    </div>

    <div class="principal">
        <div class="row">
            <div id="contenedor1" class="contenedor1">
                <h2>LENTES PARA TODOS</h2>
                Se realizará un exámen visual para todos los alumnos que lo necesitan.<br>
                Se hará un exámen socioeconómico para determinar si serán totalmente
                gratuitos o si se les aplicará un descuento.
                <h2>Fecha: </h2>
                11/09/2024
                <h2>Lugar: </h2>
                Cecytea Cd. Satélite Morelos
                <h2>Hora: </h2>
                11:00 a.m.
                <h3>Tendrán para escoger el armazón que más les guste</h3>
                <img class="lentes" src="armalentes.jpg" alt="">
            </div>
            <div id="contenedor2" class="contenedor2">
                <h2>CONCIENCIA SOCIAL - CUIDADO DEL ADULTO MAYOR</h2>
                Se busca llevar a los alumnos a diferentes convivencias con
                adultos mayores de su comunidad. 
                <h2>Fecha: </h2>
                02/12/2024
                <h2>Lugar: </h2>
                Asilos
                <h2>Hora: </h2>
                11:00 a.m.
                <h3>Los alumnos visitan las casas para realizar actividades dinámicas 
                    y entrega de artículos de primera necesidad.
                </h3>
                <img class="asilo" src="asilo.png" alt="">
            </div>
        </div>
        <div class="row">
            <div id="contenedor3" class="contenedor3">
                <h2>TAPITAS</h2>
                Se recolectaran tapas de botellas para recolectar una ayuda
                y donarla a centros de niños con cáncer.
                <h2>Fecha: </h2>
                11/09/2024
                <h2>Lugar: </h2>
                Cecytea Cd. Satélite Morelos
                <h2>Hora: </h2>
                11:00 a.m.
                <h3>Los alumnos ayudaran a recolectar las tapas</h3>
                <img class="tapitas" src="tapitas.png" alt="">
            </div>
            <div id="contenedor4" class="contenedor4">
                <h2>ZOOLÓGICO</h2>
                Ejecución del fortalecimiento del compromiso ambiental de cada persona, a través del conocimiento
                del papel de los zoológicos en la conservación.
                <h2>Fecha: </h2>
                15/10/2024
                <h2>Lugar: </h2>
                Zoológico de Guadalajara
                <h2>Hora: </h2>
                9:00 a.m. a 6:00 p.m.
                <h3>Los alumnos darán un recorrido por todo el zoológico.</h3>
                <img class="zoo" src="zoo.png" alt="">
            </div>
        </div>
    </div> 
</body>
</html>
