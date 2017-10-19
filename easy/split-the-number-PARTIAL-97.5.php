<?php
$fh = fopen($argv[1], "r");
$lookupArr = array(
	'a' => $numberVals[0],
	'b' => $numberVals[1],
	'c' => $numberVals[2],
	'd' => $numberVals[3],
	'e' => $numberVals[4],
	'f' => $numberVals[5],
	'g' => $numberVals[6],
	'h' => $numberVals[7],
	'i' => $numberVals[8],
	'j' => $numberVals[9]
	);
while ($line = fgets($fh)) {
	if($line){
		$parts = explode(" ",trim($line));
		$number = $parts[0];
		$sum = $parts[1];
		$numberVals = str_split(trim($number));
		$sumArr = str_split(trim($sum));
		$sum = "";
		foreach($sumArr as $char) {
			if(array_key_exists($char,$lookupArr)) {
				$sum .= $lookupArr[$char];
			} else {
				$sum .= $char;
			}
		}
		echo eval('return '.$sum.';').PHP_EOL;
	}
}