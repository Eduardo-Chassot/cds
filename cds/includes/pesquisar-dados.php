<?php 

$where = "";

if($titulo){
    $where .= "AND ";
    $where .= "titulo LIKE {$titulo}";
}

if($ano){
    $where .= "AND";
    $where .= "ano = {$ano}";
}

if($artista){
    $where .= "AND";
    $where .= "artista_idArtista = $artista";
}

if(){
    
}
?>