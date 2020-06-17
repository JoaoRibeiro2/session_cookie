<?php  
session_start();



$_SESSION['index'] = 'index';



if (isset($_SESSION['paginaA'])) {
		echo "Vc estava na página A<br>";
		unset($_SESSION['paginaA']);
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
	<a name="link" value="a" href="a.php">pagina A</a><br>
	<a name="link" value="b" href="b.php">pagina B</a><br>
	<a name="link" value="c" href="c.php">pagina C</a><br>
</body>
</html>