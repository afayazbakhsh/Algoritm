<?php


function power(int $a , int $n){

	if($n == 0){

		return 1;
	}

	return $a * power($a, $n-1);
}


echo power(4);