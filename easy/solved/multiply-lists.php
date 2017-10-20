<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		list($str1,$str2) = explode("|",trim($line));
		$arr1 = explode(" ",trim($str1));
		$arr2 = explode(" ",trim($str2));
		$i = 0;
		$count = count($arr1) - 1;
		$output = "";
		while($i <= $count) {
			$output .= (int) $arr1[$i] * (int) $arr2[$i]." ";
			$i++;
		}
		$output = rtrim($output).PHP_EOL;
		echo $output;
	}
}