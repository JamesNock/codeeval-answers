<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
    if($line){
        $alphabet = array(
            "a"=>"a",
            "b"=>"b",
            "c"=>"c",
            "d"=>"d",
            "e"=>"e",
            "f"=>"f",
            "g"=>"g",
            "h"=>"h",
            "i"=>"i",
            "j"=>"j",
            "k"=>"k",
            "l"=>"l",
            "m"=>"m",
            "n"=>"n",
            "o"=>"o",
            "p"=>"p",
            "q"=>"q",
            "r"=>"r",
            "s"=>"s",
            "t"=>"t",
            "u"=>"u",
            "v"=>"v",
            "w"=>"w",
            "x"=>"x",
            "y"=>"y",
            "z"=>"z");
        $chars = str_split(strtolower($line));
        foreach($chars as $char) {
            if(in_array($char,$alphabet)){
                unset($alphabet[$char]);
            }
        }
        if(count($alphabet)){
            echo implode($alphabet).PHP_EOL;
        } else {
            echo 'NULL'.PHP_EOL;
        }
    }
}