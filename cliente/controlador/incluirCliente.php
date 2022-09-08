<?php
    require_once("../../includes/conecta.php");

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $contato = $_POST['contato'];
    
    $sql = "INSERT INTO cliente (nome, telefone, contato) VALUES ('$nome', '$telefone', '$contato')";
    mysqli_query($conexao, $sql);
?>

<script type = "text/javascript">
    alert ("Inclusão feita com sucesso!");
    window.location.href = "../listarCliente.php"
</script>