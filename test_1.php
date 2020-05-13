<?php

$A = 'junyiacademy';
$B = 'flipped class room is important';
echo revert($A);
echo revert($B);


function revert($string) {
    $arr = explode(" ", $string);

    foreach ($arr as &$value) {
    	$temp_arr = str_split($value);
    	$explode = [];
    	$length = count($temp_arr);
    	for ($i = $length; $i > 0; $i--) { 
    		$explode[$length - $i] = $temp_arr[$i - 1];
    	}

    	$value = implode('', $explode);
    }
    return implode(' ', $arr);
}