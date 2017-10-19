<?php
$fh = fopen($argv[1], "r");
$output="";
while ($line = fgets($fh)) {
	if($line){
		$vals = explode(" ",trim($line));
		foreach($vals as $val) {
            $lNum = substr($val,0,1);
            $rNum = substr($val,-1);
            $word = substr($val,1,-1);
            $output .= $rNum.$word.$lNum." ";
        } 
        $output.=PHP_EOL;
    }
}
echo rtrim($output);