<?php


function dec($n)
{

    if ($n == 0) {

        return 1;
    }
    
    print($n . PHP_EOL);
    dec($n - 1);
}

echo dec(5);
