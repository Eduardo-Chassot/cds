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

$query = "SELECT titulo as nome, ano FROM cd WHERE $where";
$resultado = $banco->consulta($query);
?>


<?php foreach($resultado as $chave=>$valor){ ?>
    <div>
        <h1><?= $valor['nome'];?></h1>
    </div>

<?php }?>
    
