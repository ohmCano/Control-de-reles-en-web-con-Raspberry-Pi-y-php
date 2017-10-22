<?php
//Configuramos los pines que vamos a utilizar como salidas
shell_exec("gpio mode 0 out");//17
shell_exec("gpio mode 2 out");//27
shell_exec("gpio mode 3 out");//22
shell_exec("gpio mode 7 out");//4
shell_exec("gpio mode 8 out");//2
shell_exec("gpio mode 9 out");//3
shell_exec("gpio mode 12 out");//10
shell_exec("gpio mode 13 out");//9
shell_exec("gpio mode 14 out");//11

//activamos los pines segun la ultima configuracion, esto es porque
//cuando iniciemos la pagina la primera vez queremos que se activen
//tal cual estaba la ultima configuracion
if($estado1==1){
	shell_exec("gpio write 8 1");
}
else if($estado1==0){
	shell_exec("gpio write 8 0");
}
if($estado2==1){
	shell_exec("gpio write 9 1");
}
else if($estado2==0){
	shell_exec("gpio write 9 0");
}
if($estado3==1){
	shell_exec("gpio write 7 1");
}
else if($estado3==0){
	shell_exec("gpio write 7 0");
}
if($estado4==1){
	shell_exec("gpio write 0 1");
}
else if($estado4==0){
	shell_exec("gpio write 0 0");
}
if($estado5==1){
	shell_exec("gpio write 2 1");
}
else if($estado5==0){
	shell_exec("gpio write 2 0");
}
if($estado6==1){
	shell_exec("gpio write 3 1");
}
else if($estado6==0){
	shell_exec("gpio write 3 0");
}
if($estado7==1){
	shell_exec("gpio write 12 1");
}
else if($estado7==0){
	shell_exec("gpio write 12 0");
}
if($estado8==1){
	shell_exec("gpio write 13 1");
}
else if($estado8==0){
	shell_exec("gpio write 13 0");
}


//Cada vez que cambiemo algo de los reles debemos guardar el estado actual
//en el archivo de texto. Parace que las variables no se actualizan porque no se
//vuelve a cargar el estados.php

if(isset($_GET['r1on']) && $estado1==0){
	shell_exec("gpio write 8 1");
	$estado1 = 1;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}
else if(isset($_GET['r1off']) && $estado1 == 1){
	shell_exec("gpio write 8 0");
	$estado1 = 0;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}

if(isset($_GET['r2on']) && $estado2==0){
	shell_exec("gpio write 9 1");
	$estado2 = 1;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}
else if(isset($_GET['r2off']) && $estado2 == 1){
	shell_exec("gpio write 9 0");
	$estado2 = 0;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}

if(isset($_GET['r3on'])&& $estado3==0){
	shell_exec("gpio write 7 1");
	$estado3 = 1;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}
else if(isset($_GET['r3off']) && $estado3 == 1){
	shell_exec("gpio write 7 0");
	$estado3 = 0;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}

if(isset($_GET['r4on']) && $estado4==0){
	shell_exec("gpio write 0 1");
	$estado4 = 1;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}
else if(isset($_GET['r4off']) && $estado4 == 1){
	shell_exec("gpio write 0 0");
	$estado4 = 0;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}

if(isset($_GET['r5on']) && $estado5==0){
	shell_exec("gpio write 2 1");
	$estado5 = 1;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}
else if(isset($_GET['r5off']) && $estado5 == 1){
	shell_exec("gpio write 2 0");
	$estado5 = 0;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}

if(isset($_GET['r6on']) && $estado6==0){
	shell_exec("gpio write 3 1");
	$estado6 = 1;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}
else if(isset($_GET['r6off']) && $estado6 == 1){
	shell_exec("gpio write 3 0");
	$estado6 = 0;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}

if(isset($_GET['r7on']) && $estado7==0){
	shell_exec("gpio write 12 1");
	$estado7 = 1;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}
else if(isset($_GET['r7off']) && $estado7 == 1){
	shell_exec("gpio write 12 0");
	$estado7 = 0;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}

if(isset($_GET['r8on']) && $estado8==0){
	shell_exec("gpio write 13 1");
	$estado8 = 1;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}
else if(isset($_GET['r8off']) && $estado8 == 1){
	shell_exec("gpio write 13 0");
	$estado8 = 0;
	$lineaGuardar = "{'Rel1':".$estado1.", 'Rel2':".$estado2.", 'Rel3':".$estado3.", 'Rel4':".$estado4.", 'Rel5':".$estado5.", 'Rel6':".$estado6.", 'Rel7':".$estado7.", 'Rel8':".$estado8."}";
	$fp = fopen("releEstados.txt", "w");
	fputs($fp, $lineaGuardar);
	fclose($fp);
	//echo $lineaGuardar;
}
?>
