<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para saber más</title>
    <style>
        @font-face {
            font-family:'LetraCheri' ;
            src: url('letracheri.TTF')format('truetype');
        }
        ul{
         
         position: absolute;
         top: 12%;
         left: 50%;
         transform: translate(-50%, -50%);
         display: flex;   
        }
        ul li{
            list-style: none;
            font-weight: 500;
            font-family:'LetraCheri', sans-serif;
            font-size: 10vw;
            letter-spacing: 2.5vw;
            color: #555;
            text-shadow: none;
            animation: anim 1s infinite linear;
        }
        @keyframes anim{
            0%{
                color: #555;
                text-shadow: none;
            }
            18%{
                color: #555;
                text-shadow: none;
            }
            20%{
                color: #4169E1;
                text-shadow: 0 0 1vw #0047AB,
                0 0 3vw #00BFFF;
            }
            30%{
                color: #555;
                text-shadow: none;
            }
            35%{
                color: #4169E1;
                text-shadow: 0 0 1vw #0047AB,
                0 0 3vw #00BFFF;
            }
            70%{
                color: #555;
                text-shadow: none;
            }
            85%{
                color: #4169E1;
                text-shadow: 0 0 1vw #0047AB,
                0 0 3vw #00BFFF;
            }
            90%{
                color: #555;
                text-shadow: none;
            }
            100%{
                color: #555;
                text-shadow: none;
            }
            
        }
        .contenedor{
            display: flex;
            justify-content: center;
            margin-top: 150px;
            background-color: skyblue;
            padding: 30px;
        }
        .logocecytea{
            margin-right: 40px;
        }
    </style>
</head>
<body bgcolor="#B3ACF9">
    <ul>
        <li>A</li>
        <li>S</li>
        <li>O</li>
        <li>C</li>
        <li>I</li>
        <li>A</li>
        <li>D</li>
        <li>O</li>
        <li>S</li>
    </ul>
    
<div class="contenedor">
    <img class="logocecytea" src="logocecytea.png" alt="">
    <img class="logodif" src="logodif.jfif" alt="">
</div>
</body>
</html>