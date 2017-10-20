<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		list($str,$repChars) = explode(", ",trim($line));
		$replacements = str_split($repChars);
		foreach($replacements as $replace) {
			$str = str_replace($replace,"",$str);
		}
		echo $str.PHP_EOL;
	}
}