<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		$vals = explode(",",trim($line));
		$wordArr = array();
		$numArr = array();
		foreach($vals as $val) {
			if(is_numeric($val)) {
				$numArr[] = $val;
			} else {
				$wordArr[] = $val;
			}
		}
		if(count($wordArr) && count($numArr)){
			$wordStr = implode(',',$wordArr);
			$numStr = implode(',',$numArr);
			echo $wordStr,'|',$numStr.PHP_EOL;
		} else if(count($wordArr) || count($numArr)) {
			echo $line,PHP_EOL;
		}
	}
}