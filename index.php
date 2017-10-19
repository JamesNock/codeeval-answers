<?php

/* easy/big digits */

$lines = ['3.1415926', '123456789', '0'];
// $lines = ['0'];

$mappings = array();

// 0 0 equals top row (0) number 0
$mappings[0]['0'] = '-**-';
$mappings[1]['0'] = '*--*';
$mappings[2]['0'] = '*--*';
$mappings[3]['0'] = '*--*';
$mappings[4]['0'] = '-**-';
$mappings[0]['1'] = '--*-';
$mappings[1]['1'] = '-**-';
$mappings[2]['1'] = '--*-';
$mappings[3]['1'] = '--*-';
$mappings[4]['1'] = '-***';
$mappings[0]['2'] = '***-';
$mappings[1]['2'] = '---*';
$mappings[2]['2'] = '-**-';
$mappings[3]['2'] = '*---';
$mappings[4]['2'] = '****';
$mappings[0]['3'] = '***-';
$mappings[1]['3'] = '---*';
$mappings[2]['3'] = '-**-';
$mappings[3]['3'] = '---*';
$mappings[4]['3'] = '***-';
$mappings[0]['4'] = '-*--';
$mappings[1]['4'] = '*--*';
$mappings[2]['4'] = '****';
$mappings[3]['4'] = '---*';
$mappings[4]['4'] = '---*';
$mappings[0]['5'] = '****';
$mappings[1]['5'] = '*---';
$mappings[2]['5'] = '***-';
$mappings[3]['5'] = '---*';
$mappings[4]['5'] = '***-';
$mappings[0]['6'] = '-**-';
$mappings[1]['6'] = '*---';
$mappings[2]['6'] = '***-';
$mappings[3]['6'] = '*--*';
$mappings[4]['6'] = '-**-';
$mappings[0]['7'] = '****';
$mappings[1]['7'] = '---*';
$mappings[2]['7'] = '--*-';
$mappings[3]['7'] = '-*--';
$mappings[4]['7'] = '-*--';
$mappings[0]['8'] = '-**-';
$mappings[1]['8'] = '*--*';
$mappings[2]['8'] = '-**-';
$mappings[3]['8'] = '*--*';
$mappings[4]['8'] = '-**-';
$mappings[0]['9'] = '-**-';
$mappings[1]['9'] = '*--*';
$mappings[2]['9'] = '-***';
$mappings[3]['9'] = '---*';
$mappings[4]['9'] = '-**-';


// -**-   --*-      ***-    ***-    -*--    ****    -**-    ****   -**-  -**-
// *--*   -**-      ---*    ---*    *--*    *---    *---    ---*   *--*  *--*
// *--*   --*-      -**-    -**-    ****    ***-    ***-    --*-   -**-  -***
// *--*   --*-      *---    ---*    ---*    ---*    *--*    -*--   *--*  ---*
// -**-   -***      ****    ***-    ---*    ***-    -**-    -*--   -**-  -**-

foreach ($lines as $line) {
/*$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {*/
			
		if (strlen($line) > 1)
			$numbers = str_split($line);
		else
			$numbers = (array)$line;

		$x = 0;
		while ($x < 6) {

			foreach ($numbers as $number) {
				
				if (!is_numeric($number))
					continue;

				if ($x === 5)
					echo '-';
				else 
					echo $mappings[$x][$number], '-';

			}
			echo PHP_EOL;

			$x++;
		}

		echo PHP_EOL;

//}
}

