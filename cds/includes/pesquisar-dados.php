<?php 

require_once "BD/MySQL.class.php";

$banco = new MySQL();

$where = "1=1";

if($titulo){
    $where .= " AND titulo LIKE '$titulo%'";
}

if($ano){
    $where .= " AND ano = $ano";
}

if($artista){
    if($artista==99){
        $where .= "";
    } else {
        $where .= " AND artista_idArtista = $artista";
    }
}

if($gravadora){
    if($gravadora==99){
        $where .= "";
    } else {
         $where .= " AND gravadora_idGravadora = $gravadora";
    }
}

if($estilo){
    if($estilo==99){
        $where .= "";
    } else {
         $where .= " AND estilo_idEstilo = $estilo";
    }
}

//================Executa===================//

$query = "SELECT * FROM cd WHERE $where";
$resultado = $banco->consulta($query);

?>
<html>
<?php
foreach($resultado as $key=>$dados){
    $queryInfo = "SELECT a.nome as nome, g.identificacao as nomeGravadora, e.identificacao as nomeEstilo
    FROM 
        artista a 
    RIGHT JOIN 
        gravadora g 
    ON 
        idGravadora = {$dados['gravadora_idGravadora']}
    RIGHT JOIN
        estilo e
    ON
        idEstilo = {$dados['estilo_idEstilo']}
    WHERE
        idArtista = {$dados['artista_idArtista']}";
    $resultadoLink = $banco->consulta($queryInfo);
    echo $queryInfo;
    foreach($resultadoLink as $chave=>$valor){ ?>
        <h1>Nome do cd: <?=$dados['titulo']?>; Publicado em: <?=$dados['ano']?>; Publicado por: <?=$valor['nome']?>; Pela gravadora: <?=$valor['nomeGravadora']?>; Do gênero musical: <?=$valor['nomeEstilo']?></h1>
    <?php }
};
?>
<a href="pesquisar.php">Pesquisar outro</a>
</html>


    
