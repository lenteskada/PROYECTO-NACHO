<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <style>
        @font-face {
            font-family: 'LetraCheri';
            src: url('letracheri.TTF') format('truetype');
        }
        ul {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            margin-bottom: 20px; 
        }
        ul li {
            list-style: none;
            font-weight: 500;
            font-family: 'LetraCheri', sans-serif;
            font-size: 8vw;
            letter-spacing: 1.5vw;
            color: #555;
            text-shadow: none;
            animation: anim 1s infinite linear;
        }
        @keyframes anim {
            0% {
                color: #555;
                text-shadow: none;
            }
            20%, 35%, 85% {
                color: #4169E1;
                text-shadow: 0 0 1vw #0047AB, 0 0 3vw #00BFFF;
            }
            100% {
                color: #555;
                text-shadow: none;
            }
        }

        .principal {
            display: flex;
            justify-content: center; 
            align-items: center;
            margin-top: 150px; 
            flex-wrap: wrap;
            gap: 20px;
            max-width: 1200px; 
            margin-left: auto;
            margin-right: auto;
        }

        .flip-card {
            background-color: transparent;
            width: 250px;
            height: 400px; 
            perspective: 1000px;
            margin: 15px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 10px;
            border: 1px solid #566573;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); 
        }

        .flip-card-front {
            background-color: #A1C9F2;
        }

        .flip-card-back {
            background-color: #A1C9F2;
            color: black;
            transform: rotateY(180deg);
        }

        h2 {
            font-family: 'LetraCheri', sans-serif;
            font-size: 18px; 
            text-align: center;
        }

        p {
            font-family: sans-serif;
            font-size: 14px; 
            text-align: center;
        }

    </style>
</head>
<body bgcolor="#B3ACF9">
    <center>
        <ul>
            <li>C</li>
            <li>O</li>
            <li>N</li>
            <li>T</li>
            <li>A</li>
            <li>C</li>
            <li>T</li>
            <li>O</li>
            <li>S</li>
        </ul>

        <div class="principal">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h2>ENCARGADOS DEL PROYECTO DE LENTES</h2>
                        <p>*Nazario Hernández Reyes</p>
                        <p>*Adriana Martínez</p>
                    </div>
                    <div class="flip-card-back">
                        <h2>CONTACTOS</h2>
                        <p>*nazario.hernandez@cecytea.edu.mx</p>
                        <p>*adriana.martinez@cecytea.edu.mx</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h2>ENCARGADOS DEL PROYECTO DEL ASILO</h2>
                        <p>*Gemma Adlemi Morales Villegas</p>
                        <p>*J Antonio Romo Marín</p>
                        <p>*David Emmanuel Andrade Torres</p>
                        <p>*Silvia Márquez Rodríguez</p>
                        <p>*Claudia Elizabeth Martínez Murillo</p>
                        <p>*Orlando Ramiro Esquivel Arellano</p>
                        <p>*Ana Cecilia Rodarte Durón</p>
                    </div>
                    <div class="flip-card-back">
                        <p>*Ma. Magdalena Valdivia López</p>
                        <p>*María Patricia Arellano Flores</p>
                        <p>*Maria Soledad Salazar Vázquez</p>
                        <p>*Juana Ines Flores López</p>
                        <p>*Luz Cecilia Sánchez Zamarripa</p>
                        <p>*Brenda Susana López González</p>
                        <p>*Stephanie Díaz Ramírez</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h2>ENCARGADOS DEL PROYECTO DE LAS TAPITAS</h2>
                        <p>*</p>
                        <p>*</p>
                    </div>
                    <div class="flip-card-back">
                        <h2>CONTACTOS</h2>
                        <p>*</p>
                        <p>*</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h2>ENCARGADOS DEL PROYECTO DEL ZOOLÓGICO</h2>
                        <p>*Juana Ines Flores López.</p>
                        <p>*Nazario Hernández Reyes</p>
                        <p>*Flor Guadalupe Flores Marín</p>
                        <p>*Fernando Delgado Espejo</p>
                        <p>*Salvador Ascencio López.</p>
                        <p>*Silvia Márquez Rodríguez</p>
                        <p>*Marcelina García Juárez</p>
                        
                    </div>
                    <div class="flip-card-back">
                    <p>*María Soledad Salazar Vázquez</p>
                    <p>*Alberto Jorge Rosales Narváez</p>
<p>*Edmundo Zacarías Guzmán</p>
<p>*Angelica Weeke Zavala</p>
<p>*Irma Ofelia Romero Chávez</p>
<p>*María Patricia Arellano Flores</p>
<p>*Ma. Magdalena Valdivia</p>
<p>*Enfermeros</p>
<p>*Directivos</p>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>
</html>

