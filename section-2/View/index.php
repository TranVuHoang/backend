<?php
require_once "./data.php";
echo '<pre>';
print_r($customers);
echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổ dữ liệu PHP lên bảng HTML</title>
    <style>
        table {
            border-collapse: collapse;
            font-family: segoe ui light;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Department</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($customers as $customer) {
                echo '<tr>';
                echo '<td>' . $customer['code'] . '</td>';
                echo '<td>' . $customer['name'] . '</td>';
                echo '<td>' . $customer['department'] . '</td>';
                echo '<td>' . number_format($customer['salary']) . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <p>Tổng: <?php echo count($customers); ?> Nhân viên</p>
</body>

</html>