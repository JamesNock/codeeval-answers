<?php
$fh = fopen($argv[1], "r");
while ($line = trim(fgets($fh))) {
	if($line){
		if(strlen($line) <= 55){
			echo $line.PHP_EOL;
		} else {
			echo trim(substr(trim($line),0,40))."... <Read More>".PHP_EOL;
		}
	}
}