<?php

include 'crudProduto.php';

$opcao= $_POST["opcao"];

switch($opcao ){

    case "Alterar":
        alterarProduto($_POST["codigoP"], $_POST["titulo"], $_POST["cep"]);
        header("Location: mostrarProduto.php");
        break;
}