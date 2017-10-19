<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
    if($line){
        $parts = explode(";",trim($line));
        $arr = explode(",",$parts[0]);
        $num = $parts[1];
        $chunks = array_chunk($arr,$num);
        $output = "";
        foreach($chunks as $chunk) {
            $rev = array_reverse($chunk);
            foreach($rev as $val){
                $output.=$val.",";
            }
        }
        echo rtrim($output,",").PHP_EOL;
    }
}