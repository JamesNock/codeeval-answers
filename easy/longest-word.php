<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		$words = explode(' ',trim($line));
		$maxLen = 0;
		$longestWord = "";
		foreach($words as $word){
			$len = strlen($word);
			if($len > $maxLen) {
				$maxLen = $len;
				$longestWord = $word;
			}
		}
		echo trim($longestWord).PHP_EOL;
	}
}