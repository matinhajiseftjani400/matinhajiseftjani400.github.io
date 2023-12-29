<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Message</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
        // پیام خوش‌آمدگویی
        $welcomeMessage = "خوش آمدید به وبسایت حاجی سفتجانی!";

        // نمایش پیام
        echo "<h1>$welcomeMessage</h1>";

        // نمایش جدول با نام "حاجی سفتجانی"
        echo "<h2>حاجی سفتجانی</h2>";
        echo "<table>";
        echo "<tr><th>نام</th><th>نام خانوادگی</th></tr>";
        echo "<tr><td>حاجی</td><td>سفتجانی</td></tr>";
        echo "</table>";
    ?>
</body>
</html>
