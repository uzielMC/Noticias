<?php 
	require_once "conectarBD.php";
function datosNoticia(){
	$db = conectaDB();
	
	$dbTabla = "Noticias";
	
	$consulta ="SELECT * FROM $dbTabla";
	$result = $db->query($consulta);
	
	foreach($result as $valor => $fila){
		$fechas[$valor] = $fila['fecha'];
		$datos[$valor] = $fila;
	}
	array_multisort($fechas, SORT_DESC,SORT_REGULAR, $datos);
	return $datos;
}
?>