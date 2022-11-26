<?php 


function fib(int $n) : int{

	return $n == 1 || $n == 0 ? $n : fib($n-1) + fib($n-2);
}

echo fib(4);