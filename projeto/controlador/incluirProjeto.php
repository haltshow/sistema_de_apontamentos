<?php
    require_once("../../includes/conecta.php");

    $nomeProjeto = $_POST['nomeProjeto'];
    $nomeCliente = $_POST['nomeCliente'];
    $totalHoras = $_POST['totalHoras'];
    
    $sql = "INSERT INTO projeto (nome_projeto, nome_cliente, total_horas) VALUES ('$nomeProjeto', '$nomeCliente', '$totalHoras')";
    $result = mysqli_query($conexao, $sql);
    if($result) {
?>
        <script type = "text/javascript">
            alert ("Inclusão feita com sucesso!");
            window.location.href = "../listarProjeto.php"
        </script>
<?php 
    }else { ?>
        <script type = "text/javascript">
            alert ("Inclusão mal sucedida! Verifique o nome do cliente!");
            window.location.href = "../listarProjeto.php"
        </script>
<?php 
    } ?>
