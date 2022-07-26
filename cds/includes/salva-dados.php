<?php

require 'BD/MySQL.class.php';

$banco = new MySQL();

if($tipo==0){

    $verifica = $banco->consulta("SELECT * FROM {$tabela} WHERE {$coluna} = '{$nome}'");
    if($verifica){
        echo ("Já há um desse!"); die;
    } else {
        $salvar = "INSERT INTO {$tabela} ({$coluna}) VALUES ('{$nome}')";
        $banco->executa($salvar);
    }

} else {

    $salvar = "INSERT INTO {$tabela} ({$coluna}) VALUES ('{$titulo}', '{$ano}', '{$artista}', '{$gravadora}', '{$estilo}')";
    $banco->executa($salvar);
    
}
?>