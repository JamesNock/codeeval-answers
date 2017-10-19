<?php
$fh = fopen($argv[1], "r");
$replacements = array(', yeah!',', this is crazy, I tell ya.',', can U believe this?',', eh?',', aw yea.',', yo.','? No way!','. Awesome!');
$punctuation = array(".","!","?");
while ($line = fgets($fh)) {
	if($line){
		$i = 0;
		$lineChars = str_split($line);
		foreach($lineChars as $char) {
			if(in_array($char,$punctuation)){
				if($i % 2 === 1){
					echo $replacements[$i];
				} else {
					echo $char;
				}
				$i++;
			} else {
				echo $char;
			}
		}
		echo PHP_EOL;
	}
}