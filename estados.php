<?php

// Ejemplo aprenderaprogramar.com
// Iremos leyendo línea a línea del fichero.txt hasta llegar al fin (feof($fp))
// fichero.txt tienen que estar en la misma carpeta que el fichero php
// fichero.txt es un archivo de texto normal creado con notepad, por ejemplo.
$fp = fopen("releEstados.txt", "r");
while(!feof($fp)) {
	$linea = fgets($fp);
	$linea = substr($linea, 1, strlen($linea)-2);
	$lineaInfo = explode(",", $linea);
	
	for ($i = 0;$i<8;$i++){
		$values[$i] = explode(':',$lineaInfo[$i]);
	}
	
	//$lineaGuardar = "{'Rel1': ".$values[0][1].", 'Rel2': ".$values[1][1].", 'Rel3': ".$values[2][1].", 'Rel4': ".$values[3][1].", 'Rel5': ".$values[4][1].", 'Rel6': ".$values[5][1].", 'Rel7': ".$values[6][1].", 'Rel8': ".$values[7][1]."}";
	//print  $lineaGuardar;
	
	$estado1 = $values[0][1];
	$estado2 = $values[1][1];
	$estado3 = $values[2][1];
	$estado4 = $values[3][1];
	$estado5 = $values[4][1];
	$estado6 = $values[5][1];
	$estado7 = $values[6][1];
	$estado8 = $values[7][1];
	
}
fclose($fp);

//Esta página se abrira cada vez que nos conectemos al servidos, se comprobará el estado
//de los reles y se activaran según la última configuración guardada.





?>
