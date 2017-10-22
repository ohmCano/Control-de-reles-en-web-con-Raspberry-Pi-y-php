<html>
<head>
<meta name="control de modulo de 8 reles">
<title>Control de reles </title>
</head>

<body>
<?php
require("estados.php");
require("gestion.php");
?>
  
<div align="center">
<form method="get" action="rele8.php">
	<h3>Rele 1
	<?php 
	if($estado1 == 1){
		echo "ON";
	}
	else if ($estado1 == 0){
		echo "OFF";
	}
	?> </h3>
	<input type="submit" value="ON" name="r1on">
	<input type="submit" value="OFF" name="r1off">
	<h3>Rele 2
	<?php
	if($estado2 == 1){
		echo "ON";
	}
	else if ($estado2 == 0){
		echo "OFF";
	}
	?></h3>
	<input type="submit" value="ON" name="r2on">
	<input type="submit" value="OFF" name="r2off">
	<h3>Rele 3
	<?php
	if($estado3 == 1){
		echo "ON";
	}
	else if ($estado3 == 0){
		echo "OFF";
	}
	?></h3>
	<input type="submit" value="ON" name="r3on">
	<input type="submit" value="OFF" name="r3off">
	<h3>Rele 4
	<?php
	if($estado4 == 1){
		echo "ON";
	}
	else if ($estado4 == 0){
		echo "OFF";
	}
	?></h3>
	<input type="submit" value="ON" name="r4on">
	<input type="submit" value="OFF" name="r4off">
	<h3>Rele 5
	<?php
	if($estado5 == 1){
		echo "ON";
	}
	else if ($estado5 == 0){
		echo "OFF";
	}
	?></h3>
	<input type="submit" value="ON" name="r5on">
	<input type="submit" value="OFF" name="r5off">
	<h3>Rele 6
	<?php
	if($estado6 == 1){
		echo "ON";
	}
	else if ($estado6 == 0){
		echo "OFF";
	}
	?></h3>
	<input type="submit" value="ON" name="r6on">
	<input type="submit" value="OFF" name="r6off">
	<h3>Rele 7
	<?php
	if($estado7 == 1){
		echo "ON";
	}
	else if ($estado7 == 0){
		echo "OFF";
	}
	?></h3>
	<input type="submit" value="ON" name="r7on">
	<input type="submit" value="OFF" name="r7off">
	<h3>Rele 8
	<?php
	if($estado8 == 1){
		echo "ON";
	}
	else if ($estado8 == 0){
		echo "OFF";
	}
	?></h3>
	<input type="submit" value="ON" name="r8on">
	<input type="submit" value="OFF" name="r8off">
</form>
<br>


</div>
</body>
</html>
