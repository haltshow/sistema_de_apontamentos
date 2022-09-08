<?php
    require_once("../includes/head.php");

    $arqexcel = "<meta charset='UTF-8'>";
    $arqexcel .= "<table border='1'>
                    <thead>
                        <tr>
                        <th> Cliente</th>
                        <th> Projeto </th>
                        <th> Tecnico </th>
                        <th> Hora-Dia </th>
                        <th> Data </th>
                        <th> Atividade </th>
                        </tr>
                    </thead>
                    <tbody>";
                        $pesquisa = filter_input(INPUT_POST, 'pesqRel', FILTER_SANITIZE_STRING);
                        $sql = "SELECT nome_cliente, apontamento.id, apontamento.nome_projeto, nome_tecnico, hora_dia, DATE_FORMAT( at_data, '%d/%m/%Y') as at_data, atividade FROM apontamento INNER JOIN projeto ON apontamento.nome_projeto = projeto.nome_projeto WHERE apontamento.nome_projeto LIKE '%$pesquisa%' OR nome_tecnico LIKE '%$pesquisa%' OR hora_dia LIKE '%$pesquisa%' OR at_data LIKE '%$pesquisa%' OR atividade LIKE '%$pesquisa%'";
                        $result = mysqli_query($conexao,$sql);
                            
                        while ($campo = mysqli_fetch_assoc($result)){
                            $arqexcel .= "<tr> 
                                <td> {$campo['nome_cliente']} </td>
                                <td> {$campo['nome_projeto']} </td>
                                <td> {$campo['nome_tecnico']} </td>
                                <td> {$campo['hora_dia']} </td>
                                <td> {$campo['at_data']} </td>
                                <td> {$campo['atividade']} </td>
                            <tr>";
                        }
                   $arqexcel .= "</tbody>
                </table>";
                    header("Content-Type = application/xls");
                    header("Content-Disposition:attachment; filename = relatorio.xls");
                    echo $arqexcel;
?>