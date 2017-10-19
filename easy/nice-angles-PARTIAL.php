<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	//$line = "208.73146871";
	if($line){
		list($degrees,$leftover) = explode(".",trim($line));
		$leftover = "0.".$leftover;
		$minsraw = $leftover * 60;
		list($mins,$dec) = explode(".",trim($minsraw));
		if(strlen($mins) > 2){
			$mins = substr($mins,0,2);
		} else if(strlen($mins) == 1) {
			$mins = "0".$mins;
		}
		$dec = "0.".$dec;
		$secs = $dec * 60;
		if(strlen($secs) > 2){
			$secs = substr($secs,0,2);
		} else if(strlen($secs) == 2) {
			$secs = "0".substr($secs,0,1);
		} else {
			$secs = "0".$secs;
		}
		echo $degrees,".",$mins,"'",$secs,'"'.PHP_EOL;
	}
}
/*output is:
194.730655160'0"
0.0'0"
90.0'0"
20.5477438880'0"
167.4685991780'0"
0.60'0"
180.0'0"
232.3845484600'0"
278.4000515600'0"
67.5967261120'0"
28.4709400060'0"
0.300'0"
196.5416760520'0"
180.5438911020'0"
0.1500'0"
310.4695917340'0"
332.2726551920'0"
78.5761058880'0"
192.2968879980'0"
180.3441424920'0"
*/