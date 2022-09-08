<?php
    require_once("conecta.php");
?>

<script>
    function verificaExclusaoCliente(id) {
        if(confirm("Tem certeza que deseja excluir este cadastro?")){
            window.location = "./controlador/excluirCliente.php?idex=" + id
        }
    }
    function verificaExclusaoProjeto(id) {
        if(confirm("Tem certeza que deseja excluir este cadastro?")){
            window.location = "./controlador/excluirProjeto.php?idex=" + id
        }
    }
    function verificaExclusaoTecnico(id) {
        if(confirm("Tem certeza que deseja excluir este cadastro?")){
            window.location = "./controlador/excluirTecnico.php?idex=" + id
        }
    }
    function verificaExclusaoApontamento(id) {
        if(confirm("Tem certeza que deseja excluir este cadastro?")){
            window.location = "./controlador/excluirApontamento.php?idex=" + id
        }
    }
</script>
