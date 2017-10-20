<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		if($line % 2 == 0) {
			echo "1";
		} else {
			echo "0";
		}
		echo PHP_EOL;
	}
}