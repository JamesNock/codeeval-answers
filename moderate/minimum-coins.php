<?php
$fh = fopen($argv[1], "r");
while ($total = fgets($fh)) {
    if($total){
        $fives = (int) floor($total / 5);
        $total = $total - ($fives * 5);

        $threes = (int) floor($total / 3);
        $total = $total - ($threes * 3);

        $ones = (int) floor($total);
        $total = $total - ($ones);
        echo ($fives + $threes + $ones).PHP_EOL;
    }
}