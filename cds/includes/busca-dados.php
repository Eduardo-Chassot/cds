<?php

require 'BD/MySQL.class.php';

$banco = new MySQL();

$buscar = "SELECT {$select} FROM {$tabela}";

$dados = $banco->consulta($buscar);

?>