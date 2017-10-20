<?php
$fh = fopen($argv[1], "r");
while ($line = trim(fgets($fh))) {
	if($line){
		$timestamps = explode(' ',$line);
		usort($timestamps,function($a,$b){
			return (strtotime($a) < strtotime($b)) ? 1 : -1;
		});
		echo implode(' ',$timestamps).PHP_EOL;
	}
}