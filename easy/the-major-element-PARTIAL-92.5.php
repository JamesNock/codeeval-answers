<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		$vals = explode(",",trim($line));
        $elements = array();
		foreach($vals as $val) {
            if(array_key_exists($val, $elements)) {
                $elements[$val] = $elements[$val] + 1;
            } else {
                $elements[$val] = 1;
            }
        } 
        arsort($elements);
        $firstValCount = reset($elements);
        $firstValKey = reset(array_flip($elements));
        if($firstValCount > (count($elements) / 2)){
            echo $firstValKey.PHP_EOL;
        } else {
            echo "None".PHP_EOL;
        }
    }
}