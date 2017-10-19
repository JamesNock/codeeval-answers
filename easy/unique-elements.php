<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		echo implode(array_unique(explode(",",trim($line))),',').PHP_EOL;
	}
}