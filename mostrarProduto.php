<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mostrar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gravadora</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Produto
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item active" href="mostrarProduto.php">Mostrar</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <?php
                                session_start();
                                if (isset($_SESSION["nome"])) {
                                    echo $_SESSION["nome"];
                                } else {
                                    header("Location: paginaLogin.php");
                                }
                                ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="controleCantor.php?opcao=Sair">Sair</a></li>
                                </a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Mostrar Produto</h1>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Opção</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'crudProduto.php';
                $codigo = $_SESSION["codigo"];
                $resultados = mostrarProduto($codigo);
                foreach ($resultados as $linha) {
                    echo "
                    <tr>
                    <td>$linha[titulo]</td>
                    <td>$linha[cep]</td>
                    <td><a class='btn btn-primary' href='alterarProduto.php? codigoP= $linha[codigoP]'>Alterar</a></td>
                </tr>
                ";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>