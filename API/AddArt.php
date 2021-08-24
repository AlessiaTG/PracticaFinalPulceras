<?php 
$hostname_localhost = "localhost";
$database_localhost = "id17410557_iaras_hilos";
$username_localhost = "id17410557_iara";
$pass_localhost = "O8!zYjlosJeH7b|e";
$conex=mysqli_connect($hostname_localhost,$username_localhost,$pass_localhost,$database_localhost);

if (isset($_GET['Nom']) && isset($_GET['Des']) && isset($_GET['ImgName']) ) {
	$query="Insert into Articulos (Nombre,Descripcion,RutaImagen) values ('".$_GET['Nom']."','".$_GET['Des']."','https://proyectoems.000webhostapp.com/Sistema/Img/".$_GET['ImgName']."')";
	$res= mysqli_query($conex,$query);
	echo$res;
    }

 ?>