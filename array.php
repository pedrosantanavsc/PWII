<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array</title>
</head>
<body>
	<?php
		$cores = array("azul", "verde", "vermelho");
		var_dump($cores);
		echo "<br>";
		echo $cores[0];

		$coresAssociativas = array(
			"ceu" => "azul",
			"relva" => "verde",
			"sangue" => "vermelho");

		echo "<br>";

		var_dump($coresAssociativas);
		echo $coresAssociativas["ceu"];
	?>
</body>
</html>