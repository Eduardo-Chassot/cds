<?php 
require 'BD/MySQL.class.php';

$banco = new MySQL();

include 'includes/busca-artista.php';
include 'includes/busca-gravadora.php';
include 'includes/busca-estilo.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Criar CDS</title>
</head>

<body>
    <form action="processa.php" method="post">
        <input type="text" name="Titulo" placeholder="Nome Do CD"></input>
        <input type="number" name="Ano" placeholder="Data de publicação"></input>
        <select name= "Artista">
            <option value='99'>Todos Artistas</option>
            <?php
                foreach($dadosArtista as $valor){ ?>
                    <option value='<?=$valor['idArtista']?>'><?=$valor['nome']?></option>
            <?php }; ?>
        </select>
        <select name="Gravadora">
            <option value='99'>Todas Gravadoras</option>
            <?php
                foreach($dadosGravadora as $valor){ ?>
                    <option value='<?=$valor['idGravadora']?>'><?=$valor['identificacao']?></option>
            <?php }; ?>
        </select>
        <select name="Estilo">
            <option value='99'>Todos Estilos</option>
            <?php
                foreach($dadosEstilo as $valor){ ?>
                    <option value='<?=$valor['idEstilo']?>'><?=$valor['identificacao']?></option>
            <?php }; ?>
        </select>
        <input type="submit" name="botao" value="Pesquisar"></input>
    </form>
</body>

</html>