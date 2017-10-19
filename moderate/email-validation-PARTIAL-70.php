<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
    $regex = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$^";
    if($line){
        if(preg_match($regex,trim($line))) {
            echo 'true'.PHP_EOL;
        } else {
            echo 'false'.PHP_EOL;
        }
    }
}