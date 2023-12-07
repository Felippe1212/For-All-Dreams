<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links -->


    <!-- Links Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700&family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Titulo/Icon -->
    <title>For All Dreams</title>
    <link rel="icon" type="image/x-icon" href="Imagens/llogo.ico">
    
    <style>
        body{
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(0, 0, 0, 0.6);
        }
        .login {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }

        .bg-video {
            width: 90vw;
            height: 90vh;
        }

        .bg-video .video {
            width: 100vw;
            height: 99vh;
            object-fit: cover;
        }
        .btns-login {
            display: flex;
            align-items: center;
        }
        .btns-login button {
            width: 78px;
            height: 20px;
            cursor: pointer;
            border: 1px solid white;
            color: white;
            text-transform: uppercase;
            background-color: transparent;
            font-weight: bold;
            font-size: 11px;
            font-family: "Oxanium", Sans-serif;
            letter-spacing: 0.2rem;
            border-radius: 10px;
            position: relative;
            transition: 1.5s;
        }

        .btns-login button:hover {
            color: rgb(255, 0, 0);
            border: none;
        }

        .btns-login button:before {
            content: ' ';
            border-radius: 15px;
            bottom: 0;
            left: 0;
            position: absolute;
            width: 0;
            height: 20px;
            background-color: rgb(61, 61, 61);
            z-index: -1;
            transition: 1s;
        }

        .btns-login button:hover:before {
            width: 100%;
        }

        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            color: #ffff;
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 18px;
            color: dodgerblue;
        }






       
    </style>
</head>
<body>
<div class="bg-video">
    
        <video class="video" autoplay="" muted="" loop="">
            <source src="Imagens/production.mp4" type="video/mp4">
        </video>

    <div class="box">

    <div class="btns-login">
                    <a href="home.php">
                        <button class="btn-loginn">Voltar</button>
                    </a>
                </div>

        <form action="testLogin.php" method="POST">
            <fieldset>
                <legend><b>Login</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </fieldset>
        </form>
    </div>

</body>
</html>