<?php
$test = 0x00FF;
$p = pack('S', $test);
if($test!==current(unpack('v', $p))){
	echo "BigEndian";
} else {
	echo "LittleEndian";
}