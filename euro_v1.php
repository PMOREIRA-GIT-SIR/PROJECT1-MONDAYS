<?php
include 'CKeyGen.php';
$kg = new CKeyGen();
?>
<html>
	<head>
		<title> EURO MILLIONS - KEY GENERATOR </title>
		<link rel="stylesheet" href="em_style.css"/>
	</head>
	<body>
		<h1> EURO MILLIONS KEY GENERATOR</h1>
		<?php 
		echo $kg->key2HTML();
		echo "<hr/>"; 
		$kg->regenerate();
		echo $kg->key2XHTML();
		?>
	</body>
</html>