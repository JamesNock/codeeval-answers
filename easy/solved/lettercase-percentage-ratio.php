<?php
$fh = fopen($argv[1], "r");
while ($line = fgets($fh)) {
	if($line){
		$countUpper = 0;
		$countLower = 0;
		$length = strlen($line) - 1;
		$i = 0;
		while($i<$length){
			if(ctype_upper($line[$i])) {
				$countUpper++;
			} else {
				$countLower++;
			} $i++;
		}
		$lowerPerc = number_format((float) round(($countLower/$length * 100),2),2,'.','');
		$upperPerc = number_format((float) round(($countUpper/$length * 100),2),2,'.','');
		printf('lowercase: %s uppercase: %s%s',$lowerPerc,$upperPerc,PHP_EOL);
	}
}