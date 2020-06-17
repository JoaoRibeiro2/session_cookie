
<meta charset="utf-8">

<?php 
session_start();
	


	if (!isset($_SESSION['nome']) || (!isset($_SESSION['senha'])) )
	{
		header('location: index.php');
	}
	else
	{
		echo "";
	}




/*
if (!isset($_SESSION['nome']))
{
	echo "Sessão não iniciada";
}
else
{
	echo "Sessão iniciada";
}*/


//&& $_SESSION['senha'] == 'joao1234'

// || $_SESSION['senha'] != 'joao1234'
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/session2.css">
 </head>
 <body>
 		<h2>Bem Vindo!</h2>
 </body>
 </html>