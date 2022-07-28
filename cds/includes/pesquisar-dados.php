<?php 

require_once "BD/MySQL.class.php";

$banco = new MySQL();

$firstWhere = 0;
$where = "";

if($titulo){
    if($firstWhere == 0){
        $firstWhere = 1;
        $where .= "titulo LIKE '$titulo'";
    } else { 
        $where .= " AND titulo LIKE '$titulo'";
    }
}

if($ano){
    if($firstWhere == 0){
        $firstWhere = 1;
        $where .= "ano = $ano";
    } else { 
        $where .= " AND ano = $ano";
    }
}

if($artista){
    if($firstWhere == 0){
        $firstWhere = 1;
        $where .= "artista_idArtista = '$artista'";
    }else { 
        $where .= " AND artista_idArtista = '$artista'";
    }
}

if($gravadora){
    if($firstWhere == 0){
        $where .= "gravadora_idGravadora = $gravadora";
        $firstWhere = 1;
    } else {
        $where .= " AND gravadora_idGravadora = $gravadora";
    }
}

if($estilo){
    if($firstWhere == 0){
        $where .= "estilo_idEstilo = $estilo";
        $firstWhere = 1;
    } else {
        $where .= " AND estilo_idEstilo = $estilo";
    }
}

$query = "SELECT * FROM cd WHERE $where";
$resultado = $banco->consulta($query);

$queryArtista = "SELECT nome FROM artista WHERE idArtista = $artista";
$resultadoArtistas = $banco->consulta($queryArtista);
?>


<?php foreach($resultado as $chave=>$valor){ ?>
    <div>
        <?=
        $artistaID = $resultado['artista_idArtista'];
        $queryArtista = "SELECT nome FROM artista WHERE idArtista = $valor['artista_idArtista']";
        echo $queryArtista;
        //$resultadoArtistas = $banco->consulta($queryArtista);//
        ?>
        <h1><?= $valor['titulo'];?></h1>   
    </div>

<?php }?>
    
