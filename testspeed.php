
<?php
	/*
	<html>
		<body>
			<form action="testspeed.php" method = "GET">
			<label>Enter a factor!(1-100)<input type = "text" name = "num"/>
			<input type="submit" value ="Test"/>
		</body>
	</html>

	*/
	//$n = $_GET["num"];
	$n = 1;
	if($n>0) {
		$a = null;
		$b = null;
		$c = null;
		$i = null;
		$max = $n * 100000000;
		$start = microtime(true);
		for ($i = 0; $i < $max; $i++) {
		    $a = 1234 + 5678 + $i;
		    $b = 1234 * 5678 + $i;
		    $c = 1234 / 2 + $i;
		}
		var_dump(microtime(true) - $start);

	}
?>
