<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		list($numbers,$target) = explode(";",trim($line));
		$arr = explode(',',trim($numbers));
		sort($arr);
		$pairs = array();
		$i = 0;
		$count = count($arr);
		while($i < $count){
			$j = 0;
			while($j < $count){
				if($i!=$j){
					if($arr[$i] + $arr[$j] == $target){
						$pairs[$arr[$i]] = $arr[$j];
					}
				}
				$j++;
			}
			$i++;
		}
		if(count($pairs)>0){
			$output = "";
			foreach($pairs as $k=>$v){
				$output.=$k.','.$v.';';
			}
			echo rtrim($output,';').PHP_EOL;
		} else {
			echo 'NULL'.PHP_EOL;
		}
	}
}