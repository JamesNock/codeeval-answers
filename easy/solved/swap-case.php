<?php
function switchCase($char) {
	if(ctype_alpha($char)) {
		if(ctype_lower($char)) {
			return ucfirst($char);
		} else if (ctype_upper($char)) {
			return lcfirst($char);
		}
	} else {
		return $char;
	}
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
	$arr = fgets($fh);
	$lines = explode("\n",$arr);
	foreach($lines as $line){
		$string = str_split($line);
		foreach($string as $char) {
			echo switchCase($char);
		} echo "\n";
	} 
}