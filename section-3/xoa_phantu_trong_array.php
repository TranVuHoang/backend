<?php

/** Xóa phần tử ở vị trí bất kỳ trong mảng PHP
 * array_splice($arrName, $index(vị trí bắt đầu xóa), $length(số phần tử muốn xóa), []);
 */
$arr9 = ['a', 'b', 'c', 'd', 'e'];
echo 'Mảng a9 ban đầu';
echo '<pre>';
print_r($arr9);
echo '</pre>';

// thực hiện việc xóa 2 phần tử bắt đầu từ vị trí index = 1; -> b và c sẽ bị xóa
$arrRemote = array_splice($arr9, 1, 2, []);
echo 'Mảng sau a9 sau khi xóa 2 phần tử b và c:';
echo '<pre>';
print_r($arr9);
echo '</pre>';
