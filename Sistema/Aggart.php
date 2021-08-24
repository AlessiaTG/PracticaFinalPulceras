<?php
if(isset($_POST['Enviar']))
{
    if ($_POST['Nom']!=null && $_POST['Des']!=null && $_POST['ImgName']!=null) {
		$string="https://proyectoems.000webhostapp.com/API/AddArt.php?Nom=".$_POST['Nom']."&Des=".$_POST['Des']."&ImgName=".$_POST['ImgName'].".jpg";
		$json = file_get_contents($string);
		$ruta="Img/".$_POST["ImgName"].".jpg";
		$foto=$_FILES['foto']['tmp_name'];
		if(move_uploaded_file($foto,$ruta))
		{
		   
		}
		else
		{
		    
		}
		if ($json=="1") {
			echo "Agregado Exitosamente";
		}
		else
		{
			echo "Error al agregar";
		}
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="estilos2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Agregar Fruta</title>
</head>
<body>
<div class="cont-agr">
	<div class="tittle" id="tltVerS">Agregar Articulos</div>
		<form action="Aggart.php" class="form-cbr" method="Post" enctype="multipart/form-data">
			<div class="cont-cbr">
				<span class="details">Nombre: </span>
				<input class="input-style" type="text" name="Nom">
			</div>
			<div class="cont-cbr">
				<span class="details">Descripción:</span>
				<input class="input-style" type="text" name="Des">
			</div>	
			<div class="cont-cbr">
				<span class="details">Imagen:</span>
				<input class="input-style" type="Text" name="ImgName">
				<input type="file" name="foto" id="file" class="input-style">
			</div>	
			<input class="btnAgr" type="submit"  name="Enviar">
		</form>
	</div>
</body>
</html>