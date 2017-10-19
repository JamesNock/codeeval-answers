<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	$arr = array_reverse(explode(" ",trim($line)));
	$i = 0;
	$output="";
	foreach($arr as $val) {
		if($i % 2==0) {
			$output.=$val." ";
		}
		$i++;
	}
	echo rtrim($output).PHP_EOL;
}