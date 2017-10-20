<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line) {
		$coords = explode(' ',trim($line));
		$x = $coords[0];
		$y = $coords[1];
		$newX = $coords[2];
		$newY = $coords[3];
		$dir = "";
		if($x == $newX && $y==$newY) {
			$dir = 'here';
		} else {
			if($newY > $y){
				$dir .= "N";
			} else if($newY < $y) {
				$dir .= "S";
			}
			if($newX > $x) {
				$dir .= "E";
			} else if($newX < $x) {
				$dir .= "W";
			} 
		}
		echo $dir.PHP_EOL;
	}
}