<?php
    require_once("../../includes/conecta.php");
    $id = $_POST['edid'];
    $nome = $_POST['ednome'];
    $telefone = $_POST['edtelefone'];
    $contato = $_POST['edcontato'];
    
    $sql = "UPDATE cliente SET nome = '$nome', telefone = '$telefone', contato = '$contato' WHERE id='$id'";
    mysqli_query($conexao, $sql);
?>

<script type = "text/javascript">
    alert ("Edição feita com sucesso!");
    window.location.href = "../listarCliente.php"
</script>