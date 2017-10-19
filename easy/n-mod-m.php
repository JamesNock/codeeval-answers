<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		list($n,$m) = explode(",",trim($line));
		if($m > $n) {
			echo (int) $n;
		} else if($m==$n) {
			echo (int) "0";
		} else {
			while($n - $m > 0){
				$n = $n-$m;
			}
			echo (int) $n;
		}
		echo PHP_EOL;
	}
}