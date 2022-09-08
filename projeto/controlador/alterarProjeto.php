<?php
    require_once("../../includes/conecta.php");

    $id = $_POST['edid'];
    $nomeProjeto = $_POST['ednomeProjeto'];
    $nomeCliente = $_POST['ednomeCliente'];
    $totalHoras = $_POST['edtotalHoras'];
    
    $sql = "UPDATE projeto SET nome_projeto = '$nomeProjeto', nome_cliente = '$nomeCliente', total_horas = '$totalHoras' WHERE id = '$id'";
    $result = mysqli_query($conexao, $sql);
    if($result) {
?>
    <script type = "text/javascript">
            alert ("Edição feita com sucesso!");
            window.location.href = "../listarProjeto.php"
        </script>
<?php 
    }else { ?>
        <script type = "text/javascript">
            alert ("Edição mal sucedida! Verifique o nome do cliente!");
            window.location.href = "../listarProjeto.php"
        </script>
<?php 
    } ?>