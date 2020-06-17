<?php  

session_start();
$_SESSION['paginaA'] = 'paginaA';

	if (isset($_SESSION['index'])) {
		echo "Vc estava na página index<br>";
		unset($_SESSION['index']);
	}
	else if (isset($_SESSION['paginaB'])) {
		echo "Vc estava na página B<br>";
		unset($_SESSION['paginaB']);
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
	<a href="b.php">pagina B</a><br>
	<a href="c.php">pagina C</a><br>
</body>
</html>