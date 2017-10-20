<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if ($line) {
		$regex = "/^[a-z0-9_.+-]+@{1}[a-z0-9-]+(.[a-z]+){1,2}/i";
		if (preg_match($regex, trim($line)))
			echo 'true',PHP_EOL;
		else
			echo 'false',PHP_EOL;
	}
}
