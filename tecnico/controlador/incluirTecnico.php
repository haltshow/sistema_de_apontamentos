<?php
    require_once("../../includes/conecta.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $situacao = $_POST['situacao'];
    
    $sql = "INSERT INTO tecnico (nome, email, senha, situacao) VALUES ('$nome', '$email', '$senha', '$situacao')";
    mysqli_query($conexao, $sql);
?>

<script type = "text/javascript">
    alert ("Inclusão feita com sucesso!");
    window.location.href = "../listarTecnico.php"
</script>