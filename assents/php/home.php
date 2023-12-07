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
            text-align: center;
            color: white;
            height: 100vh;
            width: 100vw;
        }
        .backgrond {
            background: linear-gradient(rgba(17, 17, 17, 0.849), rgba(20, 20, 20, 0.007)), url(Imagens/alugarcarroembruxelas.jpg);
            background-position: center center;
            background-size: cover;
            background-position-y: 0px;
            background-repeat: no-repeat;
            height: 100vh;
            width: 100vw;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            margin: 0;
            font-size: 2rem;
        }

        h2 {
            margin: 0;
            font-size: 4rem;
        }

        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <div class="backgrond">
    <h1>Bem-vindo</h1>
    <h2>For All Dreams<br>Automotives</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</div>
</body>
</html>