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
    <link rel="stylesheet" href="clientes_pesquisar.css">

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
    <form method="POST" id="formPesquisa">
    <div class="mb-3">
        <label for="razaoSocial" class="form-label">Razão Social</label>
        <input type="text" class="form-control" id="razao" name="razaoSocial">
    </div>
    <div class="mb-3">
        <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
        <input type="text" class="form-control" id="nome" name="nomeFantasia">
    </div>
    <div class="mb-3">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" name="cnpj">
    </div>
    <button type="submit" class="btn btn-outline-dark" name="pesquisar">Pesquisar</button>
    </form>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#formPesquisa').submit(function(event) {
        event.preventDefault(); // Evita o envio do formulário

        // Obtém os valores dos campos
        var razaoSocial = $('#razao').val();
        var nomeFantasia = $('#nome').val();
        var cnpj = $('#cnpj').val();

        // Envia uma requisição AJAX para o PHP com os parâmetros da pesquisa
        $.ajax({
            type: 'POST',
            url: 'processar_pesquisa.php', // Arquivo PHP para processar a pesquisa
            data: {
                razaoSocial: razao,
                nomeFantasia: nome,
                cnpj: cnpj,
                pesquisar: true
            },
            success: function(response) {
                // Exibe os resultados da pesquisa dentro do container
                $('#resultadoPesquisa').html(response);
            },
            error: function() {
                alert('Erro ao processar a pesquisa.');
            }
        });
    });
});
</script>


<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                    include("config.php");

                    if (isset($_POST['pesquisar'])) {
                        $razaoSocial = $_POST['razaoSocial'];
                        $nomeFantasia = $_POST['nomeFantasia'];
                        $cnpj = $_POST['cnpj'];

                        // Consulta SQL para obter os resultados baseados nos valores fornecidos pelo usuário
                        $sql = "SELECT * FROM clientes WHERE razao = '$razaoSocial' OR nome = '$nomeFantasia' OR cnpj = '$cnpj'";
                        $res = $conn->query($sql) or die($conn->error);
                        $qtd = $res->num_rows;

                    if($qtd > 0){

                            print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
                            print "<table class='table table-striped table-hover'>";
                            print "<tr>";
                            print "<th>#</th>";
                            print "<th>Nome</th>";
                            print "<th>Razão social</th>";
                            print "<th>Cnpj</th>";
                            print "<th>telefone</th>";
                            print "<th>Email</th>";
                            print "<th>Nacionalidade</th>";
                            print "<th>Site</th>";
                            print "<th>Numero de funcionarios</th>";
                            print "<th>Valor da compra</th>";
                            print "<th>Cep</th>";
                            print "<th>Logadouro</th>";
                            print "<th>Numero</th>";
                            print "<th>Uf</th>";
                            print "<th>Cidade</th>";
                            print "<th>Complemento</th>";
                            print "<th>Tipo</th>";
                            print "<th>Ações</th>";
                            print "</tr>";
                            while($row = $res->fetch_object()){
                            print "<tr>";
                            print "<td>".$row->id."</td>";
                            print "<td>".$row->nome."</td>";
                            print "<td>".$row->razao."</td>";
                            print "<td>".$row->cnpj."</td>";
                            print "<td>".$row->telefone."</td>";
                            print "<td>".$row->email."</td>";
                            print "<td>".$row->nacionalidade."</td>";
                            print "<td>".$row->site."</td>";
                            print "<td>".$row->numero_funcionarios."</td>";
                            print "<td>".$row->valor_compra."</td>";
                            print "<td>".$row->cep."</td>";
                            print "<td>".$row->logadouro."</td>";
                            print "<td>".$row->numero."</td>";
                            print "<td>".$row->uf."</td>";
                            print "<td>".$row->cidade."</td>";
                            print "<td>".$row->complemento."</td>";
                            print "<td>".$row->tipo."</td>";
                            print "<td>
                                    <button class='btn btn-success' onclick=\"location.href='editar.php?id=".$row->id."';\">Editar</button>
                                    <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='salvar.php?acao=excluir&id=".$row->id."';}else{false;}\">Excluir</button>
                                </td>";
                            print "</tr>";
                        }
                        print "</table>";
                      $html .= "</table>";
                    }else{
                      print "<p>Nenhum resultado encontrado</p>";
                    }
                } 
                ?>
            </div>
        </div>
    </div>


 <!-- <div class="align-items-center">


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

 </div> -->


  
 









<script src="home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>