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

/** 1.1 Thêm 1 phần tử vào cuối array */
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

/** 1.2 Lấy phần tử cuối mảng */
$a5 = [4, 5, 7, 9, 12];
echo '<pre>';
print_r($a5);
echo '</pre>';

$endArr = array_pop($a5);
echo 'Phần tử cuối của mảng: ' . $endArr;
echo '<pre>';
print_r($a5);
echo '</pre>';

/** 2.1 Thêm 1 phần tử vào đầu mảng: */
$a6 = [4, 5, 7, 9, 12];
array_unshift($a6, 3);
echo 'Phần tử số 3 được thêm vào đầu mảng a6';
echo '<pre>';
print_r($a6);
echo '</pre>';

/** 2.2 Lấy phần tử đầu tiên ra khỏi mảng của mảng: */
$a7 = [4, 5, 7, 9, 12];
echo '<hr/>';
echo 'Mảng ban đầu:';

echo '<pre>';
print_r($a7);
echo '</pre>';

$firstArr = array_unshift($a7);
echo 'Phần tử đầu tiên của mảng: ' . $firstArr;
echo 'Mảng sau khi lấy phần tử đầu tiên ra';
echo '<pre>';
print_r($a7);
echo '</pre>';

/** Chèn, xóa, thay thế bất kỳ vị trí nào trong array
 * 1. chèn:
 *  - array_splice($arrName, $Index(vị trí muốn chèn), $length(độ dài),  $added_array);
 * 2. Xóa:
 *  - 
*/
$a8 = [7, 4, 6, 2, 5];
echo '<hr>';
echo 'mảng a8';
echo '<pre>';
print_r($a8);
echo '</pre>';

$x = array_splice($a8, 2, 2, ['a', 'b', 'c']);
echo '<pre>';
print_r($x);
echo '</pre>';
echo '<pre>';
print_r($a8);
echo '</pre>';
