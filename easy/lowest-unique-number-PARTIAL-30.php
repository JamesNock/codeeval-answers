<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		$nos = explode(' ',trim($line));
		$uniqueNos = array_unique($nos);
		if(count($uniqueNos)) {
			echo (array_search(min($uniqueNos),$nos)+1).PHP_EOL;
		} else {
			echo '0',PHP_EOL;
		}
	}
}