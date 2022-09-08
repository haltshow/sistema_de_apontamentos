<?php
    session_start();
    require_once("../../includes/functions.php");

    $excid = $_GET['idex'];

    $sql = "DELETE FROM apontamento WHERE id = '$excid'";

    mysqli_query($conexao, $sql);

    if($_SESSION['usuAdm']) {
?>
        <script type = "text/javascript">
            window.location.href = "../listarApontamentoAdm.php"
        </script>
    <?php } else { ?>
        <script type = "text/javascript">
            window.location.href = "../listarApontamento.php"
        </script>

    <?php } ?>
