<?php

$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if ($line) {	
		
		$total = $line;

		$cnt = 0;
		while ($total !== (int) strrev($total)) {
			$total += (int) strrev($total);
			$cnt++;
		}
		echo $cnt,' ',$total,PHP_EOL;

	}
}

