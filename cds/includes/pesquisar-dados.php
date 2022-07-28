<?php 

$firstWhere = 0;
$where = "";

if($titulo){
    if($firstWhere = 0){
        $where .= "AND ";
        $firstWhere = 1;
    }
    $where .= "titulo LIKE {$titulo}";
}

if($ano){
    if($firstWhere = 0){
        $where .= "AND ";
        $firstWhere = 1;
    }
    $where .= "ano = {$ano}";
}

if($artista){
    if($firstWhere = 0){
        $where .= "AND ";
        $firstWhere = 1;
    }
    $where .= "artista_idArtista = $artista";
}

echo $where; die;
?>