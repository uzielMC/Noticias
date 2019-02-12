<?php 
	require_once "conectarBD.php";
	$db = conectaDB();
	
	$dbTabla = "Noticias";
	
	$autor = $_POST['Autor'];
	$texto = $_POST['Noti_text'];
	$categoria = $_POST['Categoria'];
	$titulo = $_POST['titulo'];
	
	$agregar ="INSERT INTO $dbTabla (id,autor, texto, categoria, titulo, fecha) 
		VALUES (NULL, '$autor', '$texto', '$categoria',
		'$titulo',NOW())";
	$ejecutar = $db->query($agregar);
	
	if(!$ejecutar){
		echo "Hubo un error";
	}
	else{
		echo "Datos guardados correctamente";
	}

?>