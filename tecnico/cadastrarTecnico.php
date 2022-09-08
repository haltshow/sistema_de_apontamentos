<?php
    require_once('../includes/head.php')
?>
    <body>
        <div class = "container mt-4">
            <div class = "row">
                <div class = "form-group col">
                    <a href = "listarTecnico.php">
                        <button class = "btn btn-primary btn-lg">
                            <i class="fas fa-undo-alt"></i>
                            <strong>Voltar</strong>
                        </button>
                    </a>
                </div>
            </div>
            <div class = "row mt-5">
                <div class = "col text-center mb-5">
                    <h1 class = "display-5"> Cadastrar Tecnico </h1>
                </div>
            </div>
            <form method = "POST" enctype = " multipart/form-data" action = "./controlador/incluirTecnico.php">
                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for = "inputNome"> Nome do Tecnico </label>
                        <input type = "text" class = "form-control" id = "inputNome" name = "nome" required>
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for = "inputTelefone"> Email </label>
                        <input type = "email" class = "form-control" id = "inputEmail" name = "email" required>
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for = "inputPassword"> Senha </label>
                        <input type = "password" class = "form-control" id = "inputPassword" name = "senha" required>
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-3 text-center">
                        <label for="selectSituacao">Status</label>
                            <select class="form-control" id="selectSituacao">
                                <option value = "0"> Administrador </option>
                                <option value = "1"> Tecnico </option>
                             </select>
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
</html>