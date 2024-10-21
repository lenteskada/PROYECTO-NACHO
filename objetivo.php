<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetivo</title>
    <style>
        @font-face {
            font-family: 'LetraCheri';
            src: url('letracheri.TTF') format('truetype');
        }
        body {
            background: pink;
            font-family: 'LetraCheri', sans-serif;
        }
        ul {
            position: absolute;
            top: 12%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;   
        }
        ul li {
            list-style: none;
            font-weight: 500;
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
        .principal {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            margin-top: 180px;
            flex-wrap: wrap;
        }
        .contenedor {
            background-color: #C7B8EA;
            width: 250px; 
            padding: 20px;
            font-family: sans-serif;
            border-radius: 10px;
            border: 1px solid #432B7A;
            margin: 20px;
            height: auto; 
            box-sizing: border-box;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .contenedor h2 {
            text-align: center;
            font-family: 'LetraCheri', sans-serif;
            font-size: 1.5em; 
        }
        .contenedor h3 {
            text-align: center;
            font-size: 0.9em; 
        }
        .logo {
            display: block;
            margin: 0 auto 10px;
            width: 70px; 
            height: auto; 
        }
    </style>
</head>
<body>
    <ul>
        <li>O</li>
        <li>B</li>
        <li>J</li>
        <li>E</li>
        <li>T</li>
        <li>I</li>
        <li>V</li>
        <li>O</li>
    </ul>
    <div class="principal">
        <div class="contenedor">
            <img src="logolentes.png" alt="Lentes Para Todos" class="logo"> 
            <h2>LENTES PARA TODOS</h2>
            <h3>El objetivo de este proyecto es brindar apoyo para los alumnos que requieran lentes.</h3>
        </div>
        <div class="contenedor">
            <img src="logoasilo.png" alt="Conciencia Social" class="logo"> 
            <h2>CONCIENCIA SOCIAL</h2>
            <h3>El objetivo de este proyecto es desarrollar conciencia social sobre el cuidado del adulto mayor.</h3>
        </div>  
        <div class="contenedor">
            <img src="logotapitas.png" alt="Tapitas" class="logo"> 
            <h2>TAPITAS</h2>
            <h3>El objetivo es fomentar un pensamiento crítico y conciencia social medioambiental.</h3>
        </div>
        <div class="contenedor">
            <img src="logozoo.png" alt="Zoológico" class="logo">
            <h2>ZOOLÓGICO</h2>
            <h3>Aprender sobre especies y conservación, fortaleciendo el compromiso ambiental.</h3>
        </div>
    </div>
</body>
</html>
