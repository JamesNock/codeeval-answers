<?php

/* easy/beatiful-strings and add */

// ABbCcc = Because C is most frequent, then b, then a 26+26+26+25+25+24

$lines = [
	'ABbCcc',
	'Good luck in the Facebook Hacker Cup this year!',
	'Ignore punctuation, please :)',
	'Sometimes test cases are hard to make up.',
	'So I just go consult Professor Dalves'
];

// $alphabet = ['','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

// $alphabet = array_flip($alphabet);

foreach ($lines as $line) {
/*$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {*/
	if ($line) {
		$total = 0;

		$strs = str_split(strtolower($line));

		$cnts = [];

		foreach ($strs as $str) {
			if (ctype_alpha($str))
				$cnts[$str] = @$cnts[$str] + 1;
		}

		arsort($cnts);

		$total = 0;
		$n = 26;
		foreach (array_values($cnts) as $cnt) {
			$total += $cnt * $n;
			$n--;
		}

		echo $total,PHP_EOL;
	}
}

