<?php

$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if ($line) {
		$x = 0;

		$self_desc = true;
		while ($x < strlen($line)) {
			if ((int)$line[$x] !== substr_count($line, $x))
				$self_desc = false;
			$x++;
		}

		echo $self_desc ? 1 : 0;
		echo PHP_EOL;
	}
}

