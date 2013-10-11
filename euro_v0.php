<html>
	<head>
		<title> EURO MILLIONS - KEY GENERATOR </title>
		<link rel="stylesheet" href="em_style.css"/>
	</head>
	<body>
		<h1> EURO MILLIONS KEY GENERATOR</h1>
		<ul class="numbers">
			<?php
				for($nn = 0; $nn < 5; $nn++) {
					$number = rand(1,50);
					echo "<li>".$number."</li>";
				}
				
			?>
		</ul>
		<ul class="stars">
			<?php
				for($nn = 0; $nn < 2; $nn++) {
					$number = rand(1,11);
					echo "<li>".$number."</li>";
				}
				
			?>
		</ul>
	</body>
</html>