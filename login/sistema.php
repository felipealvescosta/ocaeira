<?php 
// session_start inicia a sessão
 session_start();
// as variáveis login e senha recebem os dados digitados na página anterior

 $usuario = $_POST['usuario'];
 $senha = $_POST['senha']; 
 
 // as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
 // servidor = 127.0.0.1, nome do banco utilizado, senha no bando de dados.
 $con = mysql_connect("localhost", "root", "felipe007") or die ("Sem conexão com o servidor"); 
 $select = mysql_select_db("sistema") or die("Sem acesso ao DB, Entre em contato com o professor, felipealvescosta@live.com"); 
 
 // A vriavel $result pega as varias $usuario e $senha, faz uma pesquisa na tabela de usuarios 
 $result = mysql_query("SELECT * FROM `sistema` WHERE `usuario` = '$usuario' AND `senha`= '$senha'"); 
 
 /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida,
  ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, 
 se não, se não tiver registros seu valor será 0. 
 Dependendo do resultado ele redirecionará para a pagina sistema.php 
 ou retornara para a pagina do formulário inicial para que se possa tentar novamente realizar o login */ 

 if(mysql_num_rows ($result) > 0 ) 
 	{ 
 	 $_SESSION['usuario'] = $usuario;
 	 $_SESSION['senha'] = $senha;
 	 header('location:site.php');
   	} 
    else
    {
     unset ($_SESSION['usuario']); 
     unset ($_SESSION['senha']); 
     header('location:index.php'); 
    } 

?>