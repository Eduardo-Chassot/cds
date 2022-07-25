<?php


if(isset($_POST['botao'])) {
    if($_POST['botao'] == 'EnviarEstilo'){
        $tipo = 0;
        $tabela = 'estilo';
        $coluna = 'identificacao';
        if($_POST['Estilo'] != ''){
            $nome = $_POST['Artista'];
            include 'includes/salva-dados.php';
            header("location: index.php");
        }
    } else {
        if($_POST['botao'] == 'EnviarArtista'){
            $tipo = 0;
            $tabela = 'artista';
            $coluna = 'nome';
            if($_POST['Artista'] != ''){
                $nome = $_POST['Artista'];
                include 'includes/salva-dados.php';
                header("location: index.php");
            }
        } else {
            if($_POST['botao'] == 'EnviarGravadora'){
                $tipo = 0;
                $tabela = 'gravadora';
                $coluna = 'identificacao';
                $nome = $_POST['Gravadora'];
                if($nome != ''){
                    $nome = $_POST['Gravadora'];
                    include 'includes/salva-dados.php';
                    header("location: index.php");
                }
            }else {
                if($_POST['botao'] == "EnviarCD"){
                    $tipo = 1;
                    $tabela = cd;
                    $colunas = 'titulo, ano, artista_idArtista, gravadora_idGravadora, estilo_idEstilo'
                    $titulo = $_POST['Titulo'];
                    $ano = $_POST['Ano'];
                    $artista = $_POST['Artista'];
                    $gravadora = $_POST['Gravadora'];
                    $estilo = $_POST['Estilo'];
                    
                }
        }
    }
}
?>