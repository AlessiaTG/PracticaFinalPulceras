<?php 
$hostname_localhost = "localhost";
$database_localhost = "id17410557_iaras_hilos";
$username_localhost = "id17410557_iara";
$pass_localhost = "O8!zYjlosJeH7b|e";
$conex=mysqli_connect($hostname_localhost,$username_localhost,$pass_localhost,$database_localhost);

if (isset($_GET['user']) && isset($_GET['pass']) ) {
	$query="SELECT count(*) from Usuarios where Nombre='".$_GET['user']."' and Contrasena=MD5('".$_GET['pass']."')";

	$res= mysqli_query($conex,$query);
	$json=array();
	while($registro=mysqli_fetch_array($res)){
        $imp=$registro[0];
    }
    if($imp==1)
    {
        $salida['resultado']="Datos Correctos";
    }
    else
    {
        $salida['resultado']="Datos Incorrectos";
        
    }
    $json['imp2'][]=$salida;
    echo json_encode($json);
    

}
else
{

}



 ?>