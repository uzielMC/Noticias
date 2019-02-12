<?php 
	require_once "conectarBD.php";
	$db = conectaDB();
	
	$dbTabla = "Noticias";
	
	$identificador = (isset($_GET["ID"])) ? $_GET["ID"] : exit();
	
	require_once "cargarNoticias.php";
	$datosN = datosNoticia();
	$i=0;
	foreach($datosN as $valor => $fila){
		$IDN[$i] = $fila['ID'];
		$likes[$i] = $fila['likes'];
		$i ++;
	}
	$i = 0;
	while($IDN[$i]!=$identificador){
		$i++;
	}
	$nlikes = $likes[$i] +1;
	$consulta ="Update $dbTabla Set likes = $nlikes where ID = $identificador";
	$result = $db->query($consulta);
	if(!$result){
		echo 'Hubo un error';
	}
	else{
		echo 'se realizo correctamente';
	}
?>