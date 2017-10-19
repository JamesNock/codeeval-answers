<?php
$fh = fopen($argv[1], "r");

while ($line = fgets($fh)) {
	if ($line) {
		$arr = explode(',',$line);
		echo preg_match('/'.$arr[1].'/',$arr[0]) ? 'true' : 'false';
		echo PHP_EOL;
	}
}
