<?php
    require_once("../../includes/functions.php");

    $excid = $_GET['idex'];

    $sql = "DELETE FROM projeto WHERE id = '$excid'";

    mysqli_query($conexao, $sql);

?>

<script type = "text/javascript">
    window.location.href = "../listarProjeto.php"
</script>