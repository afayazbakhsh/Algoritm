<?php

// ب م م

//greatest common divisor

function mygcd($x, $y){

	if($y === 0){

		return $x;
	}

	return mygcd($y , $x % $y);
}

echo mygcd(60 , 12);