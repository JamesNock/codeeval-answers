<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		list($enc,$indexStr) = explode("| ",trim($line));
		$indexes = explode(" ",$indexStr);
		foreach($indexes as $index) {
			echo $enc[$index-1];
		}
		echo PHP_EOL;
	}
}