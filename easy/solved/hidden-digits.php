<?php
$fh = fopen($argv[1], "r");
$valid = array('a','b','c','d','e','f','g','h','i','j');
while ($line = fgets($fh)) {
	if($line){
		$arr = str_split($line);
		$output="";
		foreach($arr as $val) {
			if(is_numeric($val)) {
				$output.=$val;
			} else if(in_array($val,$valid)){
				$output.=array_search($val,$valid);
			}
		}
		if(strlen($output) > 0){
			echo $output.PHP_EOL;
		} else {
			echo "NONE".PHP_EOL;
		}
	}
}