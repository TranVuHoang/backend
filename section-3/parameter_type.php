<?php

/**
 * Truyền tham trị, tham chiếu  trong PHP
 */

function fn1($a = 0)
{
    return $a += 5;
}

echo fn1(7);
