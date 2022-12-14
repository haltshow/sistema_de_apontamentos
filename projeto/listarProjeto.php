<?php
    require_once('../includes/head.php'); 
?>
    <body>

        <div class = "container mt-4">
            <div class = "row">
                <div class = "form-group col">
                    <a href = "../menuAdm.php">
                        <button class = "btn btn-primary btn-lg">
                            <i class="fas fa-undo-alt"></i>
                            <strong>Voltar</strong>
                        </button>
                    </a>
                </div>
            </div>
            <div class = "row">
                <div class = "form-group col-3 mx-auto d-block">
                    <img src = "../imagens/logo.jpg" class = "img-fluid" alt = "Logo da 7 Consulting">
                </div>
            </div>

            <div class = "row mt-5 mb-5">
                <div class = "form-group col text-center">
                    <h1 class = "display-5"> Projetos </h1>
                </div>
            </div>

            <div class = "row">
                <form method = "POST" id = "form-pesquisa" action = "">
                    <div class = "form-group col-xs-6">
                        <div class = "input-group mb-3">
                            <input type = "search" class = "form-controlPesquisar" id = "pesquisar" name = "pesquisar">
                            <div class = "input-group-append">
                                <button type = "submit" class = "far fa-search btn-lg" style="color:white;background:transparent;border:none"></button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class = "form-group col text-right">
                    <a href = "cadastrarProjeto.php">
                        <button type = "button" class = "btn btn-success btn-lg">
                            <i class="fas fa-user-plus"></i>
                            <strong> Incluir </strong> 
                        </button>
                    </a>
                </div>
            </div>
            <div class = "row">
                <table class="table table-hover table-striped table-dark">
                    <thead>
                        <tr>
                        <th class = "text-center" scope="col"> Projeto </th>
                        <th class = "text-center" scope="col"> Cliente </th>
                        <th class = "text-center" scope="col"> Total de horas </th>
                        <th class = "text-center" colspan = "2"> Op????es </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                            $pesquisa = filter_input(INPUT_POST, 'pesquisar', FILTER_SANITIZE_STRING);
                            $sqlPesq = "SELECT * FROM projeto WHERE nome_cliente LIKE '%$pesquisa%' OR nome_projeto LIKE '%$pesquisa%' OR total_horas LIKE '%$pesquisa%'";
                            $resultPesq = mysqli_query($conexao,$sqlPesq);
                            
                            if($resultPesq) {
                                while ($campoPesq = mysqli_fetch_assoc($resultPesq)){ ?>
                                    <tr> 
                                        <td class = "text-center"> <?= $campoPesq['nome_projeto']?> </td>
                                        <td class = "text-center"> <?= $campoPesq['nome_cliente']?> </td>
                                        <td class = "text-center"> <?= $campoPesq['total_horas']?> </td>
                                        <td class = "text-right">
                                            <a href = "editarProjeto.php?editaid=<?= $campoPesq['id']?>"><button class = "btn btn-warning "><i class = "fa fa-user-edit"></i></button></a>
                                        </td>
                                        <td class = "text-left">
                                            <a href = "#" onclick = "verificaExclusaoProjeto(<?= $campoPesq['id']?>)"><button class = "btn btn-danger "><i class = "fa fa-trash"></i></button></a>
                                        </td>
                                    <tr>   
                        <?php }} ?> 

                    </tbody>
                </table>

            </div>
            
        </div>
    </body>
</html>