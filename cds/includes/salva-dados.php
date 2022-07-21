<?php

require 'BD/MySQL.class.php';

$banco = new MySQL();

if($tipo==0){

    $salvar = "INSERT INTO {$tabela} ({$coluna}) VALUES ('{$nome}')";
    //echo $salvar; die;
    $banco->executa($salvar);

}
?>