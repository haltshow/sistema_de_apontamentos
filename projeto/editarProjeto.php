<?php
    require_once('../includes/head.php');
    $edid = $_GET['editaid'];
    $sql = "SELECT * FROM projeto where id = '$edid'";
    $resultado = mysqli_query($conexao, $sql);
    $campo = mysqli_fetch_assoc($resultado);
?>

    <body>
        <div class = "container mt-4">
            <div class = "row">
                <div class = "form-group col">
                    <a href = "listarProjeto.php">
                        <button class = "btn btn-primary btn-lg">
                            <i class="fas fa-undo-alt"></i>
                            <strong>Voltar</strong>
                        </button>
                    </a>
                </div>
            </div>
            <div class = "row mt-5">
                <div class = "col text-center mb-5">
                    <h1 class = "display-5"> Editar Projeto </h1>
                </div>
            </div>
            <form method = "POST" enctype = " multipart/form-data" action = "./controlador/alterarProjeto.php">
                <input type = "hidden" name = "edid" value = "<?= $campo['id']?>">
                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for = "inputProjeto"> Nome do Projeto </label>
                        <input type = "text" class = "form-control" id = "inputProjeto" name = "ednomeProjeto" required value = "<?= $campo['nome_projeto']?>">
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for="selectNomeCliente"> Nome do Cliente </label>
                        <select class="form-control" id="selectNomeCliente" name = "ednomeCliente">
                                <?php 
                                    $sqlSelect = "SELECT nome FROM cliente";
                                    $resultSelect = mysqli_query($conexao,$sqlSelect);
                                
                                    if($resultSelect) {
                                        while ($campoSelect = mysqli_fetch_assoc($resultSelect)){ ?>
                                            <option><?= $campoSelect['nome']?></option>
                                <?php }} ?> 
                                
                            </select>
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for = "inputTotalHoras"> Total de horas </label>
                        <input type = "number" class = "form-control" id = "inputTotalHoras" name = "edtotalHoras" required step = ".01" value = "<?= $campo['total_horas']?>">
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
            $('#selectNomeCliente').select2();
        });
    </script>
</html>