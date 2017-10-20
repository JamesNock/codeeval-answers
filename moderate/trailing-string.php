<?php
/* scores 67.5*/
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if ($line) {
		list($str,$searchStr) = explode(',',trim($line));
		$arr = explode(' ',trim($str));
		if ($arr[count($arr)-1] === $searchStr)
			echo '1',PHP_EOL;
		else
			echo '0',PHP_EOL;
	}
}
