<?php

$digit = array();

// 0 0 equals top row (0) number 0
$digit[0]['0'] = '-**-';
$digit[1]['0'] = '*--*';
$digit[2]['0'] = '*--*';
$digit[3]['0'] = '*--*';
$digit[4]['0'] = '-**-';
$digit[0]['1'] = '--*-';
$digit[1]['1'] = '-**-';
$digit[2]['1'] = '--*-';
$digit[3]['1'] = '--*-';
$digit[4]['1'] = '-***';
$digit[0]['2'] = '***-';
$digit[1]['2'] = '---*';
$digit[2]['2'] = '-**-';
$digit[3]['2'] = '*---';
$digit[4]['2'] = '****';
$digit[0]['3'] = '***-';
$digit[1]['3'] = '---*';
$digit[2]['3'] = '-**-';
$digit[3]['3'] = '---*';
$digit[4]['3'] = '***-';
$digit[0]['4'] = '-*--';
$digit[1]['4'] = '*--*';
$digit[2]['4'] = '****';
$digit[3]['4'] = '---*';
$digit[4]['4'] = '---*';
$digit[0]['5'] = '****';
$digit[1]['5'] = '*---';
$digit[2]['5'] = '***-';
$digit[3]['5'] = '---*';
$digit[4]['5'] = '***-';
$digit[0]['6'] = '-**-';
$digit[1]['6'] = '*---';
$digit[2]['6'] = '***-';
$digit[3]['6'] = '*--*';
$digit[4]['6'] = '-**-';
$digit[0]['7'] = '****';
$digit[1]['7'] = '---*';
$digit[2]['7'] = '--*-';
$digit[3]['7'] = '-*--';
$digit[4]['7'] = '-*--';
$digit[0]['8'] = '-**-';
$digit[1]['8'] = '*--*';
$digit[2]['8'] = '-**-';
$digit[3]['8'] = '*--*';
$digit[4]['8'] = '-**-';
$digit[0]['9'] = '-**-';
$digit[1]['9'] = '*--*';
$digit[2]['9'] = '-***';
$digit[3]['9'] = '---*';
$digit[4]['9'] = '-**-';

$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
			
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
					echo $digit[$x][$number], '-';

			}
			echo PHP_EOL;

			$x++;
		}

		echo PHP_EOL;
}