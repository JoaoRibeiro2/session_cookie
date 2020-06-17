<?php 
session_start();

$_SESSION['paginaB'] = 'paginaB';

if (isset($_SESSION['index'])) {
		echo "Vc estava na página index<br>";
		unset($_SESSION['index']);
	}
	else if (isset($_SESSION['paginaA'])) {
		echo "Vc estava na página A<br>";
		unset($_SESSION['paginaA']);
	}
	else if (isset($_SESSION['paginaC'])){
		echo "Vc estava na página C<br>";
		unset($_SESSION['paginaC']);
	}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<a href="index.php">pagina index</a><br>
	<a href="a.php">pagina A</a><br>
	<a href="c.php">pagina B</a><br>
</body>
</html>