<?php
    session_start();
    require_once('../includes/head.php');
    $edid = $_GET['editaid'];
    $sql = "SELECT * FROM apontamento where id = '$edid'";
    $resultado = mysqli_query($conexao, $sql);
    $campo = mysqli_fetch_assoc($resultado);
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
                    <h1 class = "display-5"> Editar apontamento </h1>
                </div>
            </div>
            <form method = "POST" enctype = " multipart/form-data" action = "./controlador/alterarApontamento.php">
                <input type = "hidden" name = "edid" value = "<?= $campo['id']?>">
                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-3 text-center">
                        <label for="selectNomeProjeto"> Nome do Projeto </label>
                            <select class="form-control" id="selectNomeProjeto" name = "ednomeProjeto" >
                                <?php 
                                    $sqlSelect = "SELECT nome_projeto FROM projeto";
                                    $resultSelect = mysqli_query($conexao,$sqlSelect);
                                
                                    if($resultSelect) {
                                        while ($campoSelect = mysqli_fetch_assoc($resultSelect)){ ?>
                                            <option ><?= $campoSelect['nome_projeto']?></option>
                                <?php }} ?> 
                                
                            </select>
                    </div>
                    <div class = "form-group col-md-3 text-center">
                        <label for="inputNomeTecnico"> Nome do Tecnico </label>
                        <?php
                            if($_SESSION['usuAdm']){ ?>
                                <input type = "text" class = "form-control" id = "inputNomeTecnico" name = "ednomeTecnico" value = "<?= $campo['nome_tecnico']?>">
                            <?php } else { ?>
                                <input type = "text" class = "form-control" id = "inputNomeTecnico" name = "ednomeTecnico" value = "<?= $_SESSION['usuario'] ?>" disabled>
                            <?php }
                        ?>
                    </div>
                </div>


                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-3 text-center">
                        <label for = "inputHoraDia"> Hora-Dia </label>
                        <input type = "datetime" class = "form-control" id = "inputHoraDia" name = "edhoraDia" required value = "<?= $campo['hora_dia']?>">
                    </div>
                    <div class = "form-group col-md-3 text-center">
                        <label for = "inputData"> Data </label>
                        <input type = "date" class = "form-control" id = "inputData" name = "eddata" required value = "<?= $campo['at_data']?>">
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-6 text-center">
                        <label for="inputAtividade"> Atividade </label>
                        <textarea class="form-control" id="inputAtividade" name = "edatividade" rows="4" required value = "<?= $campo['atividade']?>"></textarea>
                    </div>
                </div>

                <div class = "row justify-content-center mt-5">

                    <div class = "form-group col-md-3 text-center">
                        <button type = "reset" class = "btn btn-danger btn-lg"> <i class="far fa-window-close"></i><strong> Cancelar </strong> </button>
                    </div>
                    <div class = "form-group col-md-3 text-center">
                        <button type = "submit" class = "btn btn-success btn-lg"> <i class="fas fa-check-circle"></i><strong> Salvar </strong> </button>
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