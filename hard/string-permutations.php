<?php
$fh = fopen($argv[1], "r");

function permute($str) {
	if (strlen($str) < 2) {
		return array($str);
	}
	$permutations = array();
	$tail = substr($str, 1);
	foreach (permute($tail) as $permutation) {
		$length = strlen($permutation);
		for ($i = 0; $i <= $length; $i++) {
			$permutations[] = substr($permutation, 0, $i) . $str[0] . substr($permutation, $i);
		}
	}
	return $permutations;
}

while ($line = fgets($fh)) {
	if($line){
		$permutations = array_unique(permute(trim($line)));
		sort($permutations);
		$output = "";
		foreach($permutations as $permutation) {
			$output.= $permutation.',';
		}
		echo rtrim($output,",").PHP_EOL;
	}
}