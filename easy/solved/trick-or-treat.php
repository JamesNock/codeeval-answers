<?php
$fh = fopen($argv[1], "r");
while ($line = trim(fgets($fh))) {
	if($line){
		list($v,$z,$w,$h) = explode(', ',$line);
		$vampires = explode(': ',$v);
		$zombies = explode(': ',$z);
		$witches = explode(': ',$w);
		$houses = explode(': ',$h);
		$kids = $vampires[1] + $zombies[1] + $witches[1];
		echo floor( ((($vampires[1]*3)+($zombies[1]*4)+($witches[1]*5))* $houses[1]) /$kids).PHP_EOL;
	}
}