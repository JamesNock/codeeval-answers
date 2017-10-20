<?php
function getCategory($age) {
	if($age > 0 && $age< 3) {
		return 'Still in Mama\'s arms';
	} else if ($age == 3 || $age == 4) {
		return 'Preschool Maniac';
	} else if ($age > 4 && $age < 12) {
		return 'Elementary school';
	} else if ($age > 11 && $age < 14) {
		return 'Middle school';
	} else if ($age > 14 && $age < 19) {
		return 'High school';
	} else if ($age > 18 && $age < 23) {
		return 'College';
	} else if ($age > 22 && $age < 66) {
		return 'Working for the man';
	} else if ($age > 65 && $age < 101) {
		return 'The Golden Years';
	} else {
		return 'This program is for humans';
	}
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
	$str = trim(fgets($fh));
		echo getCategory($str)."\n";
}