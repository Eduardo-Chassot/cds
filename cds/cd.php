<?php 
$tabela = "artista";
$select = '*';
include 'includes/busca-dados.php';
print_r($dados);
?>

<!DOCTYPE html>
<html>
<head>
<title>Criar CDS</title>
</head>

<body>
    <form action="processa.php" method="post">
        <input type="text" name="Titulo" placeholder="Nome Do CD"></input>
        <input type="date" name="Ano" placeholder="Data de publicação"></input>
        <select name= "Artista">
            <?php
                $tabela = "artista";
                $select = '*';
                include 'includes/busca-dados.php';
                print_r($dados);
                foreach($dados as $value){ ?>
                    <option value=<?=$value['idArtista']?><?=$value['nome']?>><?=$value?></option>
                <?php }; ?>
        </select>
        <input type="submit" name="botao" value="EnviarCD"></input>
    </form>
</body>

</html>