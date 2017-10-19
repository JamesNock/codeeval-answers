<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		$vals = explode(" ",$line);
        $count = count($vals);
        $reversed = array_reverse($vals);
        $firstVal=$reversed[0];
        echo $vals[$count-$firstVal-1].PHP_EOL;
    }
}