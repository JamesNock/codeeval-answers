<?php
$fh = fopen($argv[1], "r");
$allLines = array();
while ($line = fgets($fh)) {
	$allLines[] = $line;
}
$numberToPrint = $allLines[0];
$max = 0;
$linesOfInterest = array();
$i = 0;
foreach($allLines as $line){
	if($i!=0){
		$len = strlen($line);
		if($len >= $max) {
			$max = $len;
			$linesOfInterest[] = $line;
		}
	} $i++;
}
unset($i);
sort($linesOfInterest);
$i = 0;
while($i<=$max){
	echo $linesOfInterest[$i].PHP_EOL;
	$i++;
}