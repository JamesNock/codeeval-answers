<?php
function checkIsPrime($num){
	if($num == 1){
		return false;
	}
	if($num == 2){
		return true;
	}
	if($num % 2 == 0) {
		return false;
	}
	for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
		if($num % $i == 0)
			return false;
	}
	return true;
}

$count = 0;
$total = 0;
$i = 0;
while($count < 1000){
	if(checkIsPrime($i)){
		$count++;
		$total+=$i;
	}
	$i++;
}
echo $total;