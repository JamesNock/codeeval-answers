<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		list($x,$n) = explode(",",trim($line));
		$multiple = $n;
		while($x > $n) {
			$n += $multiple;
		}
		echo $n.PHP_EOL;
	} 
}