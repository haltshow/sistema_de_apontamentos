<?php
    session_start();
    require_once("../../includes/conecta.php");
    $id = $_POST['edid'];
    $nomeProjeto = $_POST['ednomeProjeto'];
    $nomeTecnico = $_POST['ednomeTecnico'];
    $horaDia = $_POST['edhoraDia'];
    $data = $_POST['eddata'];
    $atividade = $_POST['edatividade'];
    
    if($_SESSION['usuAdm']){
        $sql = "UPDATE apontamento SET nome_projeto = '$nomeProjeto', nome_tecnico = '$nomeTecnico', hora_dia = '$horaDia', at_data = '$data', atividade = '$atividade' WHERE id='$id'";
        $result = mysqli_query($conexao, $sql);
        if($result) {
            ?>
                <script type = "text/javascript">
                    alert ("Edição feita com sucesso!");
                    window.location.href = "../listarApontamentoAdm.php"
                </script>
        <?php }else { ?>
                <script type = "text/javascript">
                    alert ("Edição mal sucedida! Verifique o nome do projeto e o nome do tecnico!");
                    window.location.href = "../listarApontamentoAdm.php"
                </script>
        <?php } 
    } else {
        $nomeTecnico = $_SESSION['usuario'];
        $sql = "UPDATE apontamento SET nome_projeto = '$nomeProjeto', nome_tecnico = '$nomeTecnico', hora_dia = '$horaDia', at_data = '$data', atividade = '$atividade' WHERE id='$id'";
        $result = mysqli_query($conexao, $sql);
        if($result) {
                ?>
                    <script type = "text/javascript">
                        alert ("Edição feita com sucesso!");
                        window.location.href = "../listarApontamento.php"
                    </script>
            <?php }else { ?>
                    <script type = "text/javascript">
                        alert ("Edição mal sucedida! Verifique o nome do projeto e o nome do tecnico!");
                        window.location.href = "../listarApontamento.php"
                    </script>
            <?php } }
        ?>