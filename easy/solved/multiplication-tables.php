<?php
function formatNumber($v) {
	if(strlen($v) == 1){
		return "   ".$v;
	} else if(strlen($v) == 2) {
		return "  ".$v;
	} else {
		return " ".$v;
	}
}

$arrs = array();
$j = 1;
while($j<=12){
	$i = 1;
	while($i<=12) {
		$arrs[$j][$i] = $i * $j;
		$i++;
	}
	unset($i);
	$j++;
}
unset($j);

$output = "";
foreach($arrs as $arr) {
	foreach($arr as $v){
		$output.= formatNumber($v);
	}
	$output .= "\n";
}

echo $output;