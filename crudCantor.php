<?php

include 'conexaoBD.php';

function buscarCantor($nome){ 
    connect();
    $resultados = query("SELECT * FROM cantor WHERE nomeC = '$nome'");
    close();
    return $resultados;
}

