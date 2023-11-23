<?php
if(isset($_POST['incluir'])) {
    // Redirecionamento para outra página
    header("Location: index.php");
    exit(); // Certifique-se de sair após o redirecionamento
}

if(isset($_POST['pesquisar'])) {
  // Redirecionamento para outra página
  header("Location: clientes_pesquisar.php");
  exit(); // Certifique-se de sair após o redirecionamento
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="clientes.css">

    <title>Clientes</title>
</head>
<body>
  <nav class="sidebar-menu">
    
       <div class="dropdownposition"> <!-- Div para definir a posição de todos os dropdowns -->
       <!-- Menu Cadastros -->
       <button class="dropdown-btn">Cadastros
         <i class="bi bi-caret-down-fill"></i>
       </button>
       <div class="dropdown-container">
         <a href="clientes.php">Clientes</a>
         <a href="operadoras.html">Operadoras</a>
         <a href="beneficios.html">Benefícios</a>
         <a href="relacaopedidos.html">Relação de pedidos</a>
         <a href="atribuirpedidos.html">Atribuir pedidos</a>
         <a href="pedidosfinalizados.html">Pedidos Finalizados</a>
       </div>
       <!-- Menu Tabelas -->
       <button class="dropdown-btn">Tabelas Auxiliares
         <i class="bi bi-caret-down-fill"></i>
       </button>
       <div class="dropdown-container">
         <a href="funcionarios.html">Funcionários</a>
       </div>
       <!-- Menu Operacional -->
       <button class="dropdown-btn">Operacional
         <i class="bi bi-caret-down-fill"></i>
       </button>
       <div class="dropdown-container">
         <a href="consulta.html">Consultar pedidos</a>
       </div>
      </div>
       <!-- Botão para sair -->
       <a href="login.html">
         <button type="button" class="btn btn-danger">Sair <i class="bi bi-box-arrow-left"></i></button>
       </a>
     </div>
     
     <!-- Imagem do Sidebar -->
     <div class="sidebarimg">
        <a href="home.html"><img src="img/logo.png" class="img-fluid" alt="upbeneficios-img"></a>
    </div>
     
  </nav>



  <!-- Conteúdo dos Sub-Menus -->

<div id="clientes" class="content-item align-items-center">
    <section class="pesquisa">
        <h1>Pesquisar Cliente</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="razaoSocial" class="form-label">Razão Social</label>
                <input type="text" class="form-control" id="razaoSocial" name="razaoSocial">
            </div>
            <div class="mb-3">
                <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
                <input type="text" class="form-control" id="nomeFantasia" name="nomeFantasia">
            </div>
            <div class="mb-3">
                <label for="cnpj" class="form-label">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj">
            </div>
            <button type="submit" class="btn btn-outline-dark" name = "pesquisar">Pesquisar</button>
            <button type="submit" class="btn btn-outline-success" name = "incluir">Incluir</button>
        </form>
    </section>
</div>


 <div class="align-items-center">


    <section class="tabela-clientes">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Razão Social</th>
                <th>Nome Fantasia</th>
                <th>CNPJ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Empresa A</td>
                <td>Nome Fantasia A</td>
                <td>00.000.000/0001-00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Empresa B</td>
                <td>Nome Fantasia B</td>
                <td>00.000.000/0002-00</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Empresa C</td>
                <td>Nome Fantasia C</td>
                <td>00.000.000/0003-00</td>
            </tr>
        </tbody>
        </table>
    </section>

 </div>


  
 









<script src="home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>