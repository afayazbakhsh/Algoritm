<?php 


function fact(int $n) : int {

	return $n == 0 ? 1 : $n * fact($n - 1);
}

echo fact(3);

