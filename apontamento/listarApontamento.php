<?php
    session_start();
    require_once('../includes/head.php');
    $usuPassado = $_SESSION['usuario'];
    $_SESSION['usuAdm'] = false; 
?>
    <body>

        <div class = "container mt-4">
            <div class = "row">
                <div class = "form-group col">
                    <a href = "../menu.php">
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
                    <h1 class = "display-5"> Apontamentos </h1>
                </div>
            </div>

            <div class = "row">
                <div class = "form-group col-2 text-right">
                    <a href = "cadastrarApontamento.php">
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
                        <th class = "text-center" scope="col"> Cliente</th>
                        <th class = "text-center" scope="col"> Projeto </th>
                        <th class = "text-center" scope="col"> Tecnico </th>
                        <th class = "text-center" scope="col"> Hora-Dia </th>
                        <th class = "text-center" scope="col"> Data </th>
                        <th class = "text-center" scope="col"> Atividade </th>
                        <th class = "text-center" colspan = "2"> Opções </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                            $pesquisa = filter_input(INPUT_POST, 'pesquisar', FILTER_SANITIZE_STRING);
                            $sqlPesq = "SELECT nome_cliente, apontamento.id, apontamento.nome_projeto, nome_tecnico, hora_dia, DATE_FORMAT( at_data, '%d/%m/%Y') as at_data, atividade FROM apontamento INNER JOIN projeto ON apontamento.nome_projeto = projeto.nome_projeto WHERE nome_tecnico LIKE '%$usuPassado%'";
                            $resultPesq = mysqli_query($conexao,$sqlPesq);
                            
                            if($resultPesq) {
                                while ($campoPesq = mysqli_fetch_assoc($resultPesq)){ ?>
                                    <tr> 
                                        <td class = "text-center"> <?= $campoPesq['nome_cliente']?> </td>
                                        <td class = "text-center"> <?= $campoPesq['nome_projeto']?> </td>
                                        <td class = "text-center"> <?= $campoPesq['nome_tecnico']?> </td>
                                        <td class = "text-center"> <?= $campoPesq['hora_dia']?> </td>
                                        <td class = "text-center"> <?= $campoPesq['at_data']?> </td>
                                        <td class = "text-center"> <?= $campoPesq['atividade']?> </td>
                                        <td class = "text-right">
                                            <a href = "editarApontamento.php?editaid=<?= $campoPesq['id']?>"><button class = "btn btn-warning "><i class = "fa fa-user-edit"></i></button></a>
                                        </td>
                                        <td class = "text-left">
                                            <a href = "#" onclick = "verificaExclusaoApontamento(<?= $campoPesq['id']?>)"><button class = "btn btn-danger "><i class = "fa fa-trash"></i></button>
                                        </td>
                                    <tr>   
                        <?php }} ?> 

                    </tbody>
                </table>

            </div>
            
        </div>
    </body>
</html>