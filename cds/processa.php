<?php


if(isset($_POST['botao'])) {
    if($_POST['botao'] = 'EnviarEstilo'){
        $tipo = 0;
        $tabela = 'estilo';
        $coluna = 'identificacao';
        $nome = $_POST['Estilo'];
        include 'includes/salva-dados.php';
    }
}


?>