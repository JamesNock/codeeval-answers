<?php

$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if ($line) {
		$total = 0;

		$strs = str_split(strtolower($line));

		$cnts = [];

		foreach ($strs as $str) {
			if (ctype_alpha($str))
				$cnts[$str] = @$cnts[$str] + 1;
		}

		arsort($cnts);

		$total = 0;
		$n = 26;
		foreach (array_values($cnts) as $cnt) {
			$total += $cnt * $n;
			$n--;
		}

		echo $total,PHP_EOL;
	}
}
