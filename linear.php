<?php
	$a = -1;
	$b = 10;
	$x = 0;
	$suma = 0;
	
	// $y = $a * $x + $b; -> -1 * 0 + 10 = 10
	$pierwszy = 10;
	
	for($i=0;$i<10;$i++){
		$x++;
		$y = $a * $x + $b;
		$suma = $suma + $y;
	}
	
	$poletrojkata = $suma + $pierwszy;
	
	echo "Pole powstałego trójkąta: $poletrojkata"
?>