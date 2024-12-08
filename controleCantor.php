<?php
include 'crudCantor.php';
$opcao = $_POST["opcao"];

switch ($opcao) {
    case 'Entrar':
        $nome = $_POST["nome"];
        $senha = ($_POST["senha"]);
        $resultados = buscarCantor($nome);
        foreach ($resultados as $banco);
        $codigo = $banco["codigoC"];
        if ($nome === $banco["nomeC"]) {
            if (sha1($senha) === $banco["senha"]) {
                session_start();
                $_SESSION["nome"] = $nome;
                $_SESSION["codigo"] = $codigo;
                header("Location:mostrarProduto.php");
            } else {
                echo "<script>alert('Senha Incorreta!');</script>";
                echo "<script>window.location= 'paginaLogin.php';</script>";
            }
        } else {
            echo "<script>alert('Nome Incorreto!');</script>";
            echo "<script>window.location= 'paginaLogin.php';</script>";
        }

        break;
}

$opcao = $_GET["opcao"];
switch ($opcao) {
    case 'Sair':
        session_start();
        session_destroy();
        echo "<script>alert('Destruiu a sessão ');</script>";
        echo "<script>window.location= 'paginaLogin.php';</script>";
}