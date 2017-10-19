<?php

/* code eval returns a 'fail' for this one but it seems to work correctly when tested locally */

$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
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

