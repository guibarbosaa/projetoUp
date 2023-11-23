<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Cadastro do Usuário</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usuarios.php">Usuários</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="salvar.php" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    <div class = "mb-3">
                        <label for = "nome" class = "form-label">Nome  fantasia</label>
                        <input type = "text" class = "form-control"  name = "nome">
                    </div>
                    <div class = "mb-3">
                        <label for = "razao social" class = "form-label">Razão social</label>
                        <input type = "text" class = "form-control"  name = "razao">
                    </div>
                    <div class = "mb-3">
                        <label for = "cnpj" class = "form-label">CNPJ</label>
                        <input type = "text" class = "form-control"  name = "cnpj">
                    </div>
                    <div class = "mb-3">
                        <label for = "telefone" class = "form-label">Telefone</label>
                        <input type = "text" class = "form-control"  name = "telefone">
                    </div>
                    <div class = "mb-3">
                        <label for = "email" class = "form-label">Email</label>
                        <input type = "email" class = "form-control"  name = "email">
                    </div>
                    <div class = "mb-3">
                        <label for = "Nacionalidade" class = "form-label">Nacionalidade</label>
                        <input type = "text" class = "form-control"  name = "nacionalidade">
                    </div>
                    <div class = "mb-3">
                        <label for = "site" class = "form-label">Site</label>
                        <input type = "text" class = "form-control"  name = "site">
                    </div>
                    <div class = "mb-3">
                        <label for = "numero_funciorios" class = "form-label">Numero de funcionarios</label>
                        <input type = "text" class = "form-control"  name = "numero_funcionarios">
                    </div>
                    <div class = "mb-3">
                        <label for = "valor_compra" class = "form-label">Valor da compra</label>
                        <input type = "text" class = "form-control"  name = "valor_compra">
                    </div>
                    <div class = "mb-3">
                        <label for = "cep" class = "form-label">CEP</label>
                        <input type = "text" class = "form-control"  name = "cep">
                    </div>
                    <div class = "mb-3">
                        <label for = "logadouro" class = "form-label">Logadouro</label>
                        <input type = "text" class = "form-control"  name = "logadouro">
                    </div>
                    <div class = "mb-3">
                        <label for = "numero" class = "form-label">Numero</label>
                        <input type = "text" class = "form-control"  name = "numero">
                    </div>
                    <div class = "mb-3">
                        <label for = "uf" class = "form-label">UF</label>
                        <input type = "text" class = "form-control"  name = "uf">
                    </div>
                    <div class = "mb-3">
                        <label for = "cidade" class = "form-label">Cidade</label>
                        <input type = "text" class = "form-control"  name = "cidade">
                    </div>
                    <div class = "mb-3">
                        <label for = "complemento" class = "form-label">Complemento</label>
                        <input type = "text" class = "form-control"  name = "complemento">
                    </div>
                    <div class = "mb-3">
                        <label for = "tipo" class = "form-label">Tipo</label>
                        <input type = "text" class = "form-control"  name = "tipo">
                    </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>