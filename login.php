<?php
    session_start();
    require_once('./includes/functions.php');

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $sql = "SELECT nome, situacao FROM tecnico WHERE nome = '{$usuario}' and senha = '{$senha}'";

    $result = mysqli_query($conexao, $sql);

    $linha = mysqli_num_rows($result);

    $campo = mysqli_fetch_assoc($result);

    if($linha == 1) {
        $_SESSION['usuario'] = $usuario;
        if($campo['situacao'] == 0) {
            $_SESSION['usuAdm'] = true;
            header('Location: menuAdm.php');
            exit();
        } else {
            $_SESSION['usuNormal'] = true;
            header('Location: menu.php');
            exit();
        }
    } else { 
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
    }
?>