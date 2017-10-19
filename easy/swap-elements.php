<?php

/* Works locally but codeeval not happy with it? */

$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if ($line) {
		
		list($ints, $switches) = explode (' : ', $line);

		$arr = explode(" ", $ints);

		if (strpos($switches, ',') !== false)
			$swaps = explode(', ', $switches);
		else 
			$swaps = (array)$switches;

		foreach ($swaps as $swap) {
			$switch_ints = explode("-", $swap);

			$temp = $arr[$switch_ints[0]];
			
			$arr[$switch_ints[0]] = $arr[$switch_ints[1]];
			
			$arr[$switch_ints[1]] = $temp;
		}

		echo implode(' ', $arr),PHP_EOL;
	}
}