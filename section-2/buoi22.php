<?php

/**
 * Nối chuỗi
 */
# Cách 1
$str1 = 'Hoàng';
$str2 = 'Trần';
$str = $str1 . ' ' . $str2;

echo $str;

#Cách 2
$str = "$str1 $str2";
echo '<br/>';
echo $str;

// cộng dồn
$sum = 5;
$sum += 2; // cộng dồn

$str1 = 'Hello';
$str1 .= ' World';
echo '<br/>';
echo $str1;

/**
 * Mảng 1 chiều
 * #1. Liên tục
 * #2. Kết hợp
 */

#1. Mảng liên tục(numric array)
$arr1 = [4, 7, 1, 9];
echo '<pre>';
print_r($arr1);
echo '</pre>';

$arr2 = [
    0 => 4,
    1 => 7,
    2 => 1,
    3 => 9
];
echo '<pre>';
print_r($arr2);
echo '</pre>';

#2. Mảng kết hợp (associative array)
$arr3 = [
    'math'      => 8.25,
    'physical'  => 8.25,
    'chemistry' => 6.75
];
echo '<pre>';
print_r($arr3);
echo '</pre>';

/**
 * Sự khác nhau giữa mảng thường và mảng kết hợp:
 * array thường key là số và tăng liên tục - có thể gọi là index
 * array kêt hợp: key là chuỗi hoặc số
 */

$sum = 0;

foreach ($arr3 as $point) {
    $sum += $point;
}
echo $sum;

/**
 * Mảng đa chiều
 * #1. có key liên tục (tuần tự) tự tăng từ 0-> count($arr) -1
 * #2. có key xác định
 */
$arr = [
    [5, 10, 7],
    ['hello', true]
];
echo '<pre>';
print_r($arr);
echo '</pre>';

echo $arr[0][2]; // 7

$arr = [
    'x' => [5, 10, 7],
    'y' => ['hello', true]
];
echo '<pre>';
print_r($arr);
echo '</pre>';

echo $arr['x'][2];

/**
 * Tính tổng giá trị của cac phần tử từ trái qua phải
 * gặp số 2 thì dừng(chỉ tính tổng đến khi gặp giá trị 2 thì dừng)
 */

$arr = [5, 9, 4, 2, 7];
$sum = 0;

foreach ($arr as $value) {
    if ($value == 2) {
        break; // thoát khỏi vòng lặp
    }
    $sum += $value;
}
echo '<br/>';
echo 'SUM = ' . $sum;

/**
 * Hàm trong PHP
 *
 */
function tinhTong($a, $b)
{
    $sum = $a + $b;

    return $sum;
}

echo '<br/>';
echo tinhTong(5, 9);
echo '<br/>';
echo tinhTong(4, 3);
