<meta charset="utf-8">


<?php 


if(isset($_COOKIE['user'])){
	echo "Cookie Ativo";
}
else
{
	header('location: index.php');
}


 ?>