<?php

	$nome = $_POST['nome'];
	$usuario = $_POST['usuar'];
	$senha = $_POST['senha'];



	 $connect = mysql_connect('localhost','root','felipe007');
          $db = mysql_select_db('sistema');


            $query = "INSERT INTO sistema (nome, usuario, senha) VALUES ('$nome','$usuario','$senha')";
            $insert = mysql_query($query,$connect);                 
            
            if($insert){
                echo"<script language='javascript'  charset='utf-8' type='text/javascript'>
                alert('Abestado cadastrado com sucesso!');
                window.location.href='index.php'</script>";
            }
            else{
               echo"<script language='javascript' charset='utf-8' type='text/javascript'>
               alert('N\u00e3o foi poss\u00edvel realizar o cadastro, tente novamente!');
               </script>"; die(mysql_error());
                }




?>