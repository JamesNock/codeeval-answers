<?php

$line = "2,3,1,0,-4,-1";

/*$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {*/
	if($line){
		list($len,$arrChars) = explode(";",trim($line));
		$arr = explode(",",$arrChars);
		$duplicate = "";
		$numbers = array();
		foreach($arr as $val){
			if(!in_array($val,$numbers)){
				$numbers[] = $val;
			} else {
				$duplicate = $val;
			}
		}
		echo $duplicate.PHP_EOL;
	}
//}