<?php
$nome = filter_input(INPUT_POST,'nome');
$endereco = filter_input(INPUT_POST,'endereco');
$estado = filter_input(INPUT_POST,'estado');
$cidades = filter_input(INPUT_POST,'cidade');

if (
    $nome 
    && $endereco
    && $estado
    && $cidades
){
    echo 'dados gravados com sucesso';
}
else 
{echo 'dados ausente';}