<?php

		//Codigo do Cliente a ser editado
		$cpf_cliente = ($_GET['cpf_cliente']);

		echo "$cpf_cliente";
		
		$conecta = mysql_connect("localhost", "root", "") or print (mysql_error()); 
		mysql_select_db("ocaeira", $conecta) or print(mysql_error()); 
        $sql = "SELECT cpf, nome, telefone, nascimento, sexo, email, rua, complemento, n, bairro, cidade, estado, cep FROM clientes WHERE cpf = $cpf_cliente";                        
        $result = mysql_query($sql, $conecta); 

         while( $consulta = mysql_fetch_array($result)) {
		?>
	<!DOCTYPE html>
<html>
	<head>

	<title>Editar Clientes</title>
	<link rel="stylesheet" type="text/css" href="../../model/css/bootstrap.css">
	<meta charset="utf-8">


	<script type="text/javascript">
			function voltar(){
				alert("Voltando!");
					window.location.href=('index.php');
			}
	</script>
	
	</head>
	<body class="container cadastro">

	
	<div  class="col-xs-12">

		<div class="panel panel-default">

			<div class="panel-heading">
				<h1 >Editar Clientes</h1>
				<a href="editarCliente.php">voltar</a>
			</div>
			<h3> Informações -  Clientes</h3>
			<h4><?echo "$consulta[nome]";?></h4>
			<div class="panel-body">

				<form   method="POST" enctype="multipart/form-data" action="../../controller/cliente/editarcliente.php">
					<div class="form-group">
						<label class="control-label">Nome:</label>
						<div >
							<input type="number" name="nome_cliente" value="<?php echo $consulta['nome']?>" class="form-control"/>
						</div>
					</div>	

					<div class="form-group">
						<label class="control-label">CPF:</label>
						<div >
							<input type="number" name="cpf_cliente" value="<?php echo $consulta['cpf']?>" class="form-control"/>
						</div>
					</div>	

					<div class="form-group">
						<label class="control-label">Telefone:</label>
						<div >
							<input type="text" name="telefone_cliente" value="<?php echo $consulta['telefone']?>" class="form-control"/>
						</div>
					</div>	

					
					<div class="form-group">	
						<label class=" control-label">Data Nascimento:</label>
						<div >
							<input type="date" name="nascimento_cliente" value="<?php echo $consulta['nascimento']?>" class="form-control"/>
						</div>
					</div>
						
					<div class="form-group">
						<label class="control-label">Sessão:</label>
						<div >
							<select  name="sexo_cliente"  class="form-control">
								<option value="<?php echo $consulta['sexo'];?>"><? echo $consulta['sexo'];?></option>
								<option value="f">Feminino</option>
								<option value="m">Masculino</option>
								<option value="O">Outro</option>
							</select>
						</div>
					</div>


					<div class="form-group">	
						<label>email:</label>
						<div >
							<input type="email" name="email_cliente" value="<?php echo $consulta['email']?>" class="form-control"/>
						</div>
					</div>


					<div class="form-group">	
						<label>Rua:</label>
						<div >
							<input type="text" name="rua_cliente" value="<?php echo $consulta['rua']?>" class="form-control"/>
						</div>
					</div>

					<div class="form-group">	
						<label>Comlemento:</label>
						<div >
							<input type="text" name="complemento_cliente" value="<?php echo $consulta['complemento']?>" class="form-control"/>
						</div>
					</div>

					<div class="form-group">	
						<label>Número:</label>
						<div >
							<input type="text" name="numero_cliente" value="<?php echo $consulta['n']?>" class="form-control"/>
						</div>
					</div>

					<div class="form-group">	
						<label>Bairro:</label>
						<div >
							<input type="text" name="bairro_cliente" value="<?php echo $consulta['bairro']?>" class="form-control"/>
						</div>
					</div>

					<div class="form-group">	
						<label>Cidade:</label>
						<div >
							<input type="text" name="cidade_cliente" value="<?php echo $consulta['cidade']?>" class="form-control"/>
						</div>
					</div>

					<div class="form-group">	
						<label>Estado:</label>
						<div >
							<input type="text" name="estado_cliente" value="<?php echo $consulta['estado']?>" class="form-control"/>
						</div>
					</div>

					<div class="form-group">	
						<label>Cep:</label>
						<div >
							<input type="text" name="cep_cliente" value="<?php echo $consulta['cep']?>" class="form-control"/>
						</div>
					</div>


					

						<br>
						<input type="submit" class="btn btn-info form-control" name="enviar" value="Atualizar"/>  <br><br>	
						
				</form>
					<button class="btn btn-warning form-control" onclick="voltar();">Cancelar</button>
					</div>
			</div>
		</div>
		
	</div>
<?php 
		};
		mysql_close($result);

?>
<?php
	require_once('../../model/footer.php');
?>
