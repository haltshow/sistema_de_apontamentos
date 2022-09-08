<?php
    session_start();
    require_once('./includes/head.php')
?>

    <body class = "bg2">

        <div class = "row mt-3">
            <div class = "col-1 mx-auto d-block">
                <img src = "./imagens/logo.jpg" class = "img-fluid" alt = "Logo da 7 Consulting">
            </div>
        </div>

        <div class = "row mt-5">
            <div class = "col text-center mb-5">
                <h1 class = "display-5" id = "tituloIndex"> Login </h1>
            </div>
        </div>

        <div class = "row justify-content-center mt-5">
            <div class = "col-md-2 text-center mb-5">
                <?php
                    if(isset($_SESSION['nao_autenticado'])):
                ?>
                <div class="alert alert-danger" role="alert">
                    Usuário ou senha inválido!
                </div>
                <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                ?>
            </div>
        </div>


        <form method = "POST" enctype = " multipart/form-data" action = "./login.php">

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-2 text-center">
                        <label for = "inputUsuario"> Usuario </label>
                        <input type = "text" class = "form-control" id = "inputUsuario" name = "usuario" required>
                    </div>
                </div>

                <div class = "row justify-content-center mt-3 mb-5">
                    <div class = "form-group col-md-2 text-center">
                        <label for = "inputPassword"> Senha </label>
                        <input type = "password" class = "form-control" id = "inputPassword" name = "senha" required>
                    </div>
                </div>

                <div class = "row justify-content-center mt-4">
                    <div class = "form-group col-md-2 text-center">
                        <button type = "submit" class = "btn btn-info btn-lg btn-block"><strong> Entrar </strong><i class="fas fa-sign-in-alt"></i> </button>
                    </div>
                </div>


            <form>

    </body>