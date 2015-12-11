<!DOCTYPE html>
<html>
	<head>

	<title>Visualizar Produtos - O Caeira - Web Estoque</title>
	<link rel="stylesheet" type="text/css" href="../../model/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../model/css/bootstrap.min.css">

	<meta charset="utf-8">


	<script type="text/javascript">
			function voltar(){
				alert("Voltando!");
					window.location.href=('index.php');
			}
	</script>
	</head>

	<body class="container-fluid cadastro">

	<div  class="col-xs-12 col-md-12">

		<div class="panel panel-default">

			<div class="panel-heading">
			<h1 > Clientes - O Caeira</h1>
			<a href="../../"><span class="glyphicon glyphicon-home"> Principal</span></a> | <a href="index.php"> <span class="glyphicon glyphicon-chevron-left"> Voltar</span></a>
			</div>
			<h3>Informações -  Produtos</h3>
			<div class="panel-body">
				<!-- Aqui sera a consulta do mysql -->
				<table class="table table-hover">
					<thead>
						<th>#</th>
						<th>CPF</th>
						<th>Nome</th>
						<th>Telefone</th>
						<th>Nascimento</th>
						<th>Sexo</th>
						<th>Email</th>
					</thead>
					
			    	 <tbody>
	<?php 
		include("../../model/connect.php");
        $sql = "SELECT cpf, nome, telefone, nascimento, sexo, email FROM clientes";                    
        $result = mysql_query($sql, $conecta); 
		$numerador = 1;     
		        /* Escreve resultados até que não haja mais linhas na tabela */ 
		        while( $consulta = mysql_fetch_array($result)) {
		           print "<td>$numerador</td>";
		           print "<td>$consulta[cpf]</td>";
		           print "<td>$consulta[nome]</td>"; 
		           print "<td>$consulta[telefone]</td>"; 
		           print "<td>$consulta[nascimento]</td>";
		           print "<td>$consulta[sexo]</td>"; 
		           print "<td>$consulta[email]</td>";		      
		           print "</tbody>";
		           $numerador++;
		         } 
	    		print "</table>";
		        //mysql_free_result($result); 
		        mysql_close($conecta); 
		     ?>
	
			</div>
		</div>
	</div>
<?php
	require_once('../../model/footer.php');
?>
