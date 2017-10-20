<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		list($x,$y,$n) = explode(" ",trim($line));
		$i = 1;
		$output = "";
		while($i <= $n){
			if($i % $x == 0 && $i % $y == 0) {
				$output.="FB ";
			} else if($i % $x == 0) {
				$output.="F ";
			} else if($i % $y == 0) {
				$output.="B ";
			} else {
				$output.=$i." ";
			}
			$i++;
		}
		echo rtrim($output).PHP_EOL;
	}
}