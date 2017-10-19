<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		$words = explode(" ",$line);
		$count = count($words);
		echo $words[$count-2].PHP_EOL;
	}
}