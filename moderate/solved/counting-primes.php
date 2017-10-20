<?php
$fh = fopen($argv[1], "r");

function checkIsPrime($num){
	if($num == 1){
		return false;
	}
	if($num == 2){
		return true;
	}
	if($num % 2 == 0) {
		return false;
	}
	for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
		if($num % $i == 0)
			return false;
	}
	return true;
}

while ($line = fgets($fh)) {
	if($line){
		$parts = explode(",",trim($line));
		$min = $parts[0];
		$max = $parts[1];
		$count = 0;
		while($min <= $max){
			if(checkIsPrime($min)){
				$count++;
			}
			$min++;
		}
		echo $count.PHP_EOL;
	}
}