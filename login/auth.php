<?php 

 session_start();


 $usuario = $_POST['usuario'];
 $senha = $_POST['senha']; 
 
 $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
 $select = mysql_select_db("ocaeira") or die("Sem acesso ao DB, Entre em contato com o professor, felipealvescosta@live.com"); 
 
 
 $result = mysql_query("SELECT * FROM `sistema` WHERE `usuario` = '$usuario' AND `senha`= '$senha'"); 
 


 if(mysql_num_rows ($result) > 0 ) 
 	{ 
 	 $_SESSION['usuario'] = $usuario;
 	 $_SESSION['senha'] = $senha;
 	 header('location: ../app/');
   	} 
    else
    {
     unset ($_SESSION['usuario']); 
     unset ($_SESSION['senha']); 
     header('location:index.php'); 
    } 

?>
