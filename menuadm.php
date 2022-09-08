<?php
    session_start();
    if(!$_SESSION['usuario']){
        header('Location: index.php');
        exit;
    }
    require_once('./includes/head.php');
?>
    <body class  = "bg">
        <div class = "container mt-4">

            <div class = "row">
                <div class = "col-3 mx-auto d-block">
                    <img src = "./imagens/logo.jpg" class = "img-fluid" alt = "Logo da 7 Consulting">
                </div>
            </div>

            <div class = "row mt-5">
                <div class = "col text-center mb-5">
                    <h1 class = "display-5" id = "tituloIndex"> Sistema de Apontamento </h1>
                </div>
            </div>

            <div class = "row mt-5">
                <div class = "col text-center">
                    <a href = "cliente/listarCliente.php"><button type = "button" class = "btn btn-primary" id = "botaoIndex"> <strong>Cliente</strong> </button></a>
                </div>
            </div>

            <div class = "row mt-5">
                <div class = "col text-center">
                    <a href = "projeto/listarProjeto.php"><button type = "button" class = "btn btn-primary" id = "botaoIndex"> <strong>Projeto</strong> </button></a>
                </div>
            </div>

            <div class = "row mt-5">
                <div class = "col text-center">
                    <a href = "tecnico/listarTecnico.php"><button type = "button" class = "btn btn-primary" id = "botaoIndex"> <strong>Tecnico</strong> </button></a>
                </div>
            </div>

            <div class = "row mt-5 mb-5">
                <div class = "col text-center">
                    <a href = "apontamento/listarApontamentoAdm.php"><button type = "button" class = "btn btn-primary" id = "botaoIndex"> <strong>Apontamento</strong> </button></a>
                </div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>      
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    </body>

</html>
