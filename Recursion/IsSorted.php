<?php

function isSorted(array $arr , $i ,$size){
	

	if($i == $size-1){
		return 1;
	}

	if($arr[$i] < $arr[$i + 1] && isSorted($arr,$i+1,$size)){

		return 1;
	}

	return 0;
}

$array = [1,2,3,10,4];
$size = sizeof($array);

echo isSorted($array ,0, $size);