<?php

include 'conexaoBD.php';

function mostrarProduto($codigoC)
{
    connect();
    $resultados = query("SELECT * FROM produto WHERE codigoC= $codigoC");
    close();
    return $resultados;
}

function mostrarProdutoAlterar($codigoP)
{
    connect();
    $resultados = query("SELECT * FROM produto WHERE codigoP= $codigoP");
    close();
    return $resultados;
}

function alterarProduto($codigoP, $titulo, $cep)
{
    connect();
    query("UPDATE produto SET titulo= '$titulo', cep= '$cep' WHERE codigoP= $codigoP");
    close();
}