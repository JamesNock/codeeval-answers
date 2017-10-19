<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		echo hexdec(trim($line)).PHP_EOL;
	}
}