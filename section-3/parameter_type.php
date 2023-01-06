<?php

/**
 * Truyền tham trị, tham chiếu  trong PHP
 */

function fn1($a = 0)
{
    return $a += 5;
}
$x = 7;
echo fn1($x);
echo '<br>';
echo $x;
echo '<br>';

function fn2(&$b = 0)
{
    return $b += 5;
}
$y = 7;
echo fn2($y);
echo '<br>';
echo $y;
echo '<br>';
