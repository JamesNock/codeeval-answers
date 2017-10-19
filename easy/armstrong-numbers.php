<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		$arr = str_split(trim($line));
		$n = count($arr);
		$sum = 0;
		foreach($arr as $val) {
			$sum = $sum + pow($val,$n);
		}
		if((int) $sum === (int) $line) {
			echo "True".PHP_EOL;
		} else {
			echo "False".PHP_EOL;
		}
	}
}