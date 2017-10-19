<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line) {
		$parts = explode(',',trim($line));
		$arr = explode(' ',trim($parts[0]));
		$searchStr = (string) $parts[1];
		$arr = array_reverse($arr);
		if((string) $arr[0] === $searchStr) {
			echo '1'.PHP_EOL;
		} else {
			echo '0'.PHP_EOL;
		}
	}
}