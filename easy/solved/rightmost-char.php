<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		list($string,$search) = explode(",",trim($line));
		$pos = strrpos($string,$search);
		if($pos){
			echo $pos.PHP_EOL;
		} else {
			echo "-1".PHP_EOL;
		}
	}
}