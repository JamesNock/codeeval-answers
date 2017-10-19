<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line) {
		$binary = decbin($line);
		$binToStr = str_split($binary);
		$num = 0;
		foreach($binToStr as $char){
			if($char == 1){
				$num++;
			}
		}
		echo $num.PHP_EOL;
	}
}