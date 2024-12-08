<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar</title>
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
                            <li><a class="dropdown-item" href="mostrarProduto.php">Mostrar</a></li>
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
        <h1>Alterar Produto</h1>

        <?php
        include 'crudProduto.php';
        $codigoP = $_GET["codigoP"];
        $resultados = mostrarProdutoAlterar($codigoP);
        foreach ($resultados as $linha)
            ;
        ?>

        <form method="POST" action="controleProduto.php">
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o titulo"
                    value="<?= $linha['titulo'] ?>">
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="9999-999"
                    value="<?= $linha['cep'] ?>" aria-describedby="cepHelp" pattern="\d{5}-\d{3}"
                    title="Digite o CEP no formato: 99999-999" maxlength="9" onkeypress="cepMascara(this)">
                <div id="cepHelp" class="form-text">Formato do CEP: 999.999.999-99</div>
            </div>
            <input type="hidden" name="codigoP" value="<?= $linha['codigoP'] ?>">
            <button type="submit" class="btn btn-primary" name="opcao" value="Alterar">Alterar</button>
            <a class="btn btn-warning" href="mostrarProduto.php">Cancelar</a>
        </form>
    </div>
    <script src="mascara.js" type="text/javascript"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>
</body>

</html>