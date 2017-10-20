<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		$total = 0;
		$json = json_decode($line);
		foreach($json as $j){
			foreach($j->items as $item) {
				if(isset($item->label)){
					if($item->id) {
						$total += $item->id;
					}
				}
			}
		}
		echo $total.PHP_EOL;
	}
}