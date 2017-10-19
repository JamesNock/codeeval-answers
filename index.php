<?php

/* easy/football */

$lines = ['19 11 | 19 21 23 | 31 39 29'];

foreach ($lines as $line) {
/*$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {*/
	if ($line) {	
		
		$countries = explode(' | ', $line);

		$teams = [];

		foreach ($countries as $k=>$country) {

			$country_teams = explode(' ', $country);

			foreach ($country_teams as $team)
				$teams[$team][] = $k+1;

		}

		ksort($teams);

		$output = '';
		foreach ($teams as $k=>$v)
			$output.=$k.':'.implode(',',$v).'; ';

		echo rtrim($output),PHP_EOL;
	}
}

