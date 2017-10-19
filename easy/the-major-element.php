<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if ($line) {
		$vals = explode(",",trim($line));

		$l = (int)(count($vals) / 2);

		$elems = array();
		foreach ($vals as $val) {
			if (isset($elems[$val]))
				$elems[$val]++;
			else
				$elems[$val] = 1;
		}

		$mostCommonNo = array_keys($elems, max($elems))[0];

		if (max($elems) > $l)
			echo $mostCommonNo.PHP_EOL;
		else
			echo "None".PHP_EOL;
	}
}
