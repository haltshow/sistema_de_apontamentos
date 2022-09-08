<?php
    require_once("../../includes/conecta.php");

    $id = $_POST['edid'];
    $nome = $_POST['ednome'];
    $email = $_POST['edemail'];
    $senha = $_POST['edsenha'];
    $situacao = $_POST['edsituacao'];
    
    $sql = "UPDATE tecnico SET nome = '$nome', email = '$email', senha = '$senha', situacao = '$situacao' WHERE id = '$id'";
    mysqli_query($conexao, $sql);
?>

<script type = "text/javascript">
    alert ("Edição feita com sucesso!");
    window.location.href = "../listarTecnico.php"
</script>