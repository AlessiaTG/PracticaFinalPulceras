<?php 
$hostname_localhost = "localhost";
$database_localhost = "id17410557_iaras_hilos";
$username_localhost = "id17410557_iara";
$pass_localhost = "O8!zYjlosJeH7b|e";
$json = array();
    $conexion = mysqli_connect($hostname_localhost, $username_localhost, $pass_localhost, $database_localhost);
    $consulta = ("SELECT Id,Nombre,Descripcion,RutaImagen FROM Articulos");
    $resultado_consulta = mysqli_query($conexion, $consulta);
    while($registro = mysqli_fetch_array($resultado_consulta)){
        $json['articulos'][]=$registro;
    }
    mysqli_close($conexion);
    echo json_encode($json);




?>