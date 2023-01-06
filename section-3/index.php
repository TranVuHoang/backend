<?php

/**
 * Hàm count
 * Array thường
 */
$a1 = [4, 5, 7, 9, 12];
$size = count($a1);
echo '<pre>';
print_r($a1);
echo '</pre>';
echo 'Kích thước array thường: ' . $size . '<br/>';

/** Mảng 2 chiều */
$a2 = [
    'Nga'   =>  [
        'toan'  => 7,
        'ly'    => 4,
        'hoa'   => 8.5
    ],
    'Nam'   =>  [
        'toan'  => 4,
        'ly'    => 2,
        'hoa'   => 3.5
    ],
    'Nhan'   =>  [
        'toan'  => 7,
        'ly'    => 5,
        'hoa'   => 9.5
    ]
];
echo '<pre>';
print_r($a2);
echo '</pre>';
$size = count($a2);
echo 'Kích thước mảng 2 chiều: ' . $size;
echo '<br/>';

/** Thêm 1 phần tử vào cuối array */
#Cách 1:
$a3 = [4, 5, 7, 9, 12];
array_push($a3, 11);
echo '<pre>';
print_r($a3);
echo '</pre>';

#Cách 2
$a4 = [4, 5, 7, 9, 12];
$a4[] = 11;
echo '<pre>';
print_r($a4);
echo '</pre>';

echo $a4[4];