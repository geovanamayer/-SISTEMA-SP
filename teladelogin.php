<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewpart" content="width-device-width, initial-scale-1.0">
        <title> Tela de login</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
               
            }
            .tela-login{
                background-color: rgba(0,0, 0, 0.9);
                position: absolute;
                top: 50%; 
                left: 50%;
                transform: translate(-50%,-50%);
                padding: 80px;
                border-radius: 15px;
                color: white;
            }

            input{
                padding: 15px;
                border: none;
                outline: none;
                font-size: 15px;
            }
            .button{
                background-color: dodgerblue;
                border: none;
                padding: 15px;
                width: 100%;
                border-radius: 10px;
                color: white;
                font-size: 15px;
            }
            .button:hover{
                background-color: deepskyblue;

            }
        </style>
    </head>
    <body>
        <div class="tela-login">
        <form class="box">
            <h1>Login</h1>
            <input type="text" name="usuario" placeholder="Nome">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="button" type="submit" value="Enviar">
        </form>
        </div>
    </body>
</html>