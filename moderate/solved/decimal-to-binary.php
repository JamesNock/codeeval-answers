<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		echo decbin($line).PHP_EOL;
	}
}