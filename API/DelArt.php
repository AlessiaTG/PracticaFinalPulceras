<?php 



$hostname_localhost = "localhost";
$database_localhost = "id17410557_iaras_hilos";
$username_localhost = "id17410557_iara";
$pass_localhost = "O8!zYjlosJeH7b|e";
$conex=mysqli_connect($hostname_localhost,$username_localhost,$pass_localhost,$database_localhost);

if (isset($_GET['Id']) ) {
	$query="Delete from Articulos where Id=".$_GET['Id'];
	$res= mysqli_query($conex,$query);
	echo$res;

}



 ?>