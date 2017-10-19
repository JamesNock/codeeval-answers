<?php
$fh = fopen($argv[1], "r");

$lookup = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9, 'V'=>5, 'IV'=>4, 'I'=>1); 

while ($line = fgets($fh)) {
	$output = "";
	while($line > 0) 
	{ 
		foreach($lookup as $rom=>$cardinal) 
		{ 
			if($line >= $cardinal) 
			{ 
				$line -= $cardinal; 
				$output .= $rom; 
				break; 
			} 
		} 
	} 
	echo $output.PHP_EOL; 
}