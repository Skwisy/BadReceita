<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
        <link rel="stylesheet" href="style/css/style.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
        <title>Login</title>
    </head>
    <!-- Inserção do mal do JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <body>      
     <?php require_once("php/head.php");?>
        <!-- Login e senha por CPF -->

        <form class="form-signin" method="POST" action="php/userCad.php">                
            <img src="img/Logo.png" class="img-fluid"><br><br>                
            <h1 class="font-weigth-normal  text-center">Cadastrar Usuário</h1>            
            <label for="inputPassword" class="sr-only">Digite seu nome de Usuário</label> 
            <input type="text" name="user" id="user" class="form-control my-1" placeholder="Nome de usuário" required autofocus>
            <label for="inputPassword" class="sr-only">Digite sua Senha</label> 
            <input type="password" name="pass" id="inputPassword" class="form-control my-1" placeholder="Senha" required><br>
            <button class="btn btn-lg btn-primary btn-block btn-dark" type="submit">Cadastrar</button><br>
        </form>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>