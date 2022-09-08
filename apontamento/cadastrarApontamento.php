<?php
    session_start();
    require_once('../includes/head.php')
?>
    <body>
        <div class = "container mt-4">
            <div class = "row">
                <div class = "form-group col">
                    <?php 
                        if($_SESSION['usuAdm']) { ?>
                            <a href = "listarApontamentoAdm.php">
                                <button class = "btn btn-primary btn-lg">
                                    <i class="fas fa-undo-alt"></i>
                                    <strong>Voltar</strong>
                                </button>
                            </a>
                        <?php } else { ?>
                            <a href = "listarApontamento.php">
                                <button class = "btn btn-primary btn-lg">
                                    <i class="fas fa-undo-alt"></i>
                                    <strong>Voltar</strong>
                                </button>
                            </a>
                        <?php } ?>
                </div>
            </div>
            <div class = "row mt-5">
                <div class = "col text-center mb-5">
                    <h1 class = "display-5"> Cadastrar Apontamento </h1>
                </div>
            </div>
            <form method = "POST" enctype = " multipart/form-data" action = "./controlador/incluirApontamento.php">
                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-3 text-center">
                        <label for="selectNomeProjeto"> Nome do Projeto </label>
                            <select class="form-control" id="selectNomeProjeto" name = "nomeProjeto">
                                <?php 
                                    $sql = "SELECT nome_projeto FROM projeto";
                                    $result = mysqli_query($conexao,$sql);
                                
                                    if($result) {
                                        while ($campo = mysqli_fetch_assoc($result)){ ?>
                                            <option><?= $campo['nome_projeto']?></option>
                                <?php }} ?> 
                                
                            </select>
                    </div>
                    <div class = "form-group col-md-3 text-center">
                        <label for="inputNomeTecnico"> Nome do Tecnico </label>
                        <?php
                            if($_SESSION['usuAdm']){ ?>
                                <input type = "text" class = "form-control" id = "inputNomeTecnico" name = "nomeTecnico">
                            <?php } else { ?>
                                <input type = "text" class = "form-control" id = "inputNomeTecnico" name = "nomeTecnico" value = "<?= $_SESSION['usuario'] ?>" disabled>
                            <?php }
                        ?>
                        
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-3 text-center">
                        <label for = "inputHoraDia"> Hora-Dia </label>
                        <input type = "datetime" class = "form-control" id = "inputHoraDia" name = "horaDia" required>
                    </div>
                    <div class = "form-group col-md-3 text-center">
                        <label for = "inputData"> Data </label>
                        <input type = "date" class = "form-control" id = "inputData" name = "data" required>
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-6 text-center">
                        <label for="inputAtividade"> Atividade </label>
                        <textarea class="form-control" id="inputAtividade" name = "atividade" rows="4"></textarea>
                    </div>
                </div>

                <div class = "row justify-content-center mt-5">

                    <div class = "form-group col-md-3 text-center">
                        <button type = "reset" class = "btn btn-danger btn-lg"> <i class="far fa-window-close"></i><strong> Cancelar </strong> </button>
                    </div>
                    <div class = "form-group col-md-3 text-center">
                        <button type = "submit" class = "btn btn-success btn-lg"> <i class="fas fa-check-circle"></i><strong> Cadastrar </strong> </button>
                    </div>
                    
                </div>

            <form>
        </div>
        
    </body>

    <script>
        $(document).ready(function() {
            $('#selectNomeProjeto').select2();
        });

    </script>
</html>

