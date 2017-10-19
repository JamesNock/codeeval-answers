<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		$upper = true;
		$chars = str_split($line);
		$output = "";
		foreach($chars as $char) {
			if(ctype_alpha($char)) {
				if($upper) {
					$output.=strtoupper($char);
					$upper = false;
				} else {
					$output.=strtolower($char);
					$upper = true;
				} 
			} else {
				$output.=$char;
			}
		}
		echo $output.PHP_EOL;
	}
}