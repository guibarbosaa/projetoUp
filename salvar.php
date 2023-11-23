<?php
	include("config.php");
	if(isset($_REQUEST["acao"])){
		switch ($_REQUEST["acao"]) {
			case 'cadastrar':
				$sql = "INSERT INTO clientes
							(nome, razao, cnpj, telefone, email , nacionalidade, site, numero_funcionarios, valor_compra, cep, logadouro, numero, uf, cidade, complemento, tipo)
						VALUES
							('".$_POST["nome"]."','".$_POST["razao"]."','".$_POST["cnpj"]."','".$_POST["telefone"]."','".$_POST["email"]."','".$_POST["nacionalidade"]."','".$_POST["site"]."','".$_POST["numero_funcionarios"]."','".$_POST["valor_compra"]."','".$_POST["cep"]."','".$_POST["logadouro"]."','".$_POST["numero"]."','".$_POST["uf"]."','".$_POST["cidade"]."','".$_POST["complemento"]."','".$_POST["tipo"]."')";

				$res = $conn->query($sql) or die($conn->error);

				if($res==true){
					print "<script>alert('Cadastrou com sucesso!');</script>";
					print "<script>location.href='usuarios.php';</script>";
				}else{
					print "<script>alert('Não foi possível cadastrar.');</script>";
					print "<script>location.href='usuarios.php';</script>";
				}
				break;
				
			case 'editar':
				$sql = "UPDATE clientes SET
							nome='".$_POST["nome"]."',
							razao='".$_POST["razao"]."',
							cnpj='".$_POST["cnpj"]."',
							telefone='".$_POST["telefone"]."',
							email='".$_POST["email"]."',
							nacionalidade='".$_POST["nacionalidade"]."',
							site='".$_POST["site"]."',
							numero_funcionarios='".$_POST["numero_funcionarios"]."',
							valor_compra='".$_POST["valor_compra"]."',
							cep='".$_POST["cep"]."',
							logadouro='".$_POST["logadouro"]."',
							numero='".$_POST["numero"]."',
							uf='".$_POST["uf"]."',
							cidade='".$_POST["cidade"]."',
							complemento='".$_POST["complemento"]."',
							tipo='".$_POST["tipo"]."'
						WHERE
							id=".$_POST["id"];
			
				$res = $conn->query($sql) or die($conn->error);

				if($res==true){
					print "<script>alert('Editou com sucesso!');</script>";
					print "<script>location.href='usuarios.php';</script>";
				}else{
					print "<script>alert('Não foi possível editar.');</script>";
					print "<script>location.href='usuarios.php';</script>";
				}
				break;

			case 'excluir':
				$sql = "DELETE FROM clientes WHERE id=".$_REQUEST["id"];

				$res = $conn->query($sql) or die($conn->error);

				if($res==true){
					print "<script>alert('Excluiu com sucesso!');</script>";
					print "<script>location.href='usuarios.php';</script>";
				}else{
					print "<script>alert('Não foi possível excluir.');</script>";
					print "<script>location.href='usuarios.php';</script>";
				}
				break;
		}

	}else{
		print "<script>alert('Não foi possível executar.');</script>";
		print "<script>location.href='usuarios.php';</script>";
	}
	
	
	?>