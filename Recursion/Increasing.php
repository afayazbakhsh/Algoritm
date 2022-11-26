<?php

function inc($n)
{

	if ($n == 0) {
		return 1;
	}
	inc($n - 1);
	print($n . PHP_EOL);
	// print($n . 'a'.PHP_EOL);
}


echo inc(5);
