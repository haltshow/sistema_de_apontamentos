<?php
    require_once('../includes/head.php');
    $edid = $_GET['editaid'];
    $sql = "SELECT * FROM cliente WHERE  id = '$edid'";
    $resultado = mysqli_query($conexao, $sql);
    $campo = mysqli_fetch_assoc($resultado);
?>

    <body>
        <div class = "container mt-4">
            <div class = "row">
                <div class = "form-group col">
                    <a href = "listarCliente.php">
                        <button class = "btn btn-primary btn-lg">
                            <i class="fas fa-undo-alt"></i>
                            <strong>Voltar</strong>
                        </button>
                    </a>
                </div>
            </div>
            <div class = "row mt-5">
                <div class = "col text-center mb-5">
                    <h1 class = "display-5"> Editar cliente </h1>
                </div>
            </div>
            <form method = "POST" enctype = " multipart/form-data" action = "./controlador/alterarCliente.php">
                <input type = "hidden" name = "edid" value = "<?= $campo['id']?>">
                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for = "inputNome"> Nome </label>
                        <input type = "text" class = "form-control" id = "inputNome" name = "ednome"  value = "<?= $campo['nome']?>" >
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for = "inputTelefone"> Telefone </label>
                        <input type = "tel" class = "form-control" id = "inputTelefone" name = "edtelefone" placeholder = "(xx) 9xxxx-xxxx" required value = "<?= $campo['telefone']?>">
                    </div>
                </div>

                <div class = "row justify-content-center mt-3">
                    <div class = "form-group col-md-5 text-center">
                        <label for = "inputContato"> Contato </label>
                        <input type = "text" class = "form-control" id = "inputContato" name = "edcontato" required value = "<?= $campo['contato']?>">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type = "text/javascript">
    $(document).ready(function(){
        $("#inputTelefone").mask("(00) 00000-0000");
    });
</script>