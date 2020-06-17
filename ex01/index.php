<?php 
session_start();

	if($_POST){

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	
	

	if ($nome == 'Joao' && $senha == 'joao1234') {
		$_SESSION['nome'] = 'Joao';
		$_SESSION['senha'] = 'joao1234';
		header ('location: session2.php');
	}
	else
		{
			echo '<script type="text/javascript">alert("Verifique os dado e tente novamente")</script>';
		}

}
 ?>

 <!DOCTYPE html>
 <html>
	 <head>
	 	<title></title>
	 	 <link rel="stylesheet" type="text/css" href="css/session.css">
	 </head>
	 <body>
	 	<div class="container">	
	 		<h2>Login</h2>
		 	<form action="index.php" method="post">
		 		<input type="name" name="nome" id="nome">

		 		<input type="password" name="senha" id="senha">

		 		<input class="botao" type="submit" name="enviar" value="Enviar">
		 	</form>
	 	</div>
	 </body>



  <!--  -->
 </html>