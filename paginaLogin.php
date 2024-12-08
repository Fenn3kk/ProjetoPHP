<!DOCTYPE html>
<html lang="pt-br">

<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
</head>

<body>
<div class="mask d-flex align-items-center h-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">Login</h2>

            <form method="POST" action="controleCantor.php">

              <div class="form-outline mb-4">
                <input type="text" id="nome" name="nome" class="form-control form-control-lg" />
                <label class="form-label" for="nome">Nome</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="senha" name="senha" class="form-control form-control-lg" />
                <label class="form-label" for="senha">Senha</label>
              </div>

              <div class="d-flex justify-content-center">
                <button type="submit" name="opcao" value="Entrar"
                  class="btn btn-success btn-block btn-lg text-body">Entrar</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>
</html>