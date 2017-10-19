<?php
$fh = fopen($argv[1], "r");
$total = 0;
while ($line = fgets($fh)) {
	if($line){
		$total += $line;
	}
}
echo $total;