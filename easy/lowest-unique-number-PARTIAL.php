<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		$arr = explode(" ",trim($line));
		$uniques = array_unique($arr);
		if(count($uniques) == 0) {
			echo "0";
		} else {
			sort($uniques);
			$val = $uniques[0];
			$players = array_flip($arr);
			echo ($players[array_shift($uniques)] + 1) . PHP_EOL;
		}
	}
}