<?php
    session_start();
    require_once("../../includes/conecta.php");

    $nomeProjeto = $_POST['nomeProjeto'];
    $nomeTecnico = $_POST['nomeTecnico'];
    $horaDia = $_POST['horaDia'];
    $data = $_POST['data'];
    $atividade = $_POST['atividade'];
    
    if($_SESSION['usuAdm']){
        $sql = "INSERT INTO apontamento (nome_projeto, nome_tecnico, hora_dia, at_data, atividade) VALUES ('$nomeProjeto', '$nomeTecnico', '$horaDia', '$data', '$atividade')";
        $result = mysqli_query($conexao, $sql);
        if($result) {
            ?>
                <script type = "text/javascript">
                    alert ("Inclusão feita com sucesso!");
                    window.location.href = "../listarApontamentoAdm.php"
                </script>
        <?php }else { ?>
                <script type = "text/javascript">
                    alert ("Inclusão mal sucedida! Verifique o nome do projeto!");
                    window.location.href = "../listarApontamentoAdm.php"
                </script>
        <?php } 
    } else {
        $nomeTecnico = $_SESSION['usuario'];
        $sql = "INSERT INTO apontamento (nome_projeto, nome_tecnico, hora_dia, at_data, atividade) VALUES ('$nomeProjeto', '$nomeTecnico', '$horaDia', '$data', '$atividade')";
        $result = mysqli_query($conexao, $sql);
        if($result) {
        ?>
            <script type = "text/javascript">
                alert ("Inclusão feita com sucesso!");
                window.location.href = "../listarApontamento.php"
            </script>
        <?php }else { ?>
            <script type = "text/javascript">
                alert ("Inclusão mal sucedida! Verifique o nome do projeto!");
                window.location.href = "../listarApontamento.php"
            </script>
        <?php } 
    }
?>