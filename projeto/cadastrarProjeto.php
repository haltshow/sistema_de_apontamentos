<?php
    require_once('../includes/head.php')
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
                    <h1 class = "display-5"> Cadastrar Projeto </h1>
                </div>
            </div>
            <form method = "POST" enctype = " multipart/form-data" action = "./controlador/incluirProjeto.php">
                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for = "inputProjeto"> Nome do Projeto </label>
                        <input type = "text" class = "form-control" id = "inputProjeto" name = "nomeProjeto" required>
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for="selectNomeCliente"> Nome do Cliente </label>
                            <select class="form-control" id="selectNomeCliente" name = "nomeCliente">
                                <?php 
                                    $sql = "SELECT nome FROM cliente";
                                    $result = mysqli_query($conexao,$sql);
                                
                                    if($result) {
                                        while ($campo = mysqli_fetch_assoc($result)){ ?>
                                            <option><?= $campo['nome']?></option>
                                <?php }} ?> 
                                
                            </select>
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for = "inputTotalHoras"> Total de horas </label>
                        <input type = "number" class = "form-control" id = "inputTotalHoras" name = "totalHoras" step = ".1" required>
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
            $('#selectNomeCliente').select2();
        });
    </script>
</html>