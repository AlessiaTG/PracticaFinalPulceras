<?php

if(isset($_POST['Enviar']))
{
    $json = file_get_contents("https://proyectoems.000webhostapp.com/API/LogIn.php?user=".$_POST['Usu']."&pass=".$_POST['Contra']."");

		$obt=json_decode($json);
		if($obt->imp2[0]->resultado=="Datos Correctos")
		{
			header("Location: Aggart.php");
		}
		else
		{
			echo"Datos Incorrectos";
		}
}
else
{
   
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesion</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
    	
   
</head>  
<body>
    <form class="formulario" action="Index.php" method="Post">
    
    <h1>Iniciar Sesión</h1>
     <div class="contenedor">  
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" id="idUsuario" name='Usu' placeholder="Usuario. . ." required>
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" id="idContraseña" name="Contra" placeholder="Contraseña. . ." required>
         
         </div>
        <div class="efren">
                <input type="submit" name="Enviar" value="Enviar" class="button" >

                 <input type="reset" value="Limpiar" class="button" >
        </div>
        
     </div>
    
    </form>


</body>
</html>