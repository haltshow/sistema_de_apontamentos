<?php
    require_once("../../includes/functions.php");

    $excid = $_GET['idex'];

    $sql = "DELETE FROM cliente WHERE id = '$excid'";

    mysqli_query($conexao, $sql);

?>

<script type = "text/javascript">
    window.location.href = "../listarCliente.php"
</script>