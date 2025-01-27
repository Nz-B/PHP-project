<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گزارش نهایی ثبت نمرات</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-container">
        <h1>گزارش نهایی نمرات</h1>
        <?php
            if (
                isset($_GET['StudentName']) && !empty($_GET['StudentName']) &&
                isset($_GET['score']) && !empty($_GET['score'])
            ) {
                $StudentNames = $_GET['StudentName'];
                $scores = $_GET['score'];
            ?>
            <table>
                <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>نام دانش‌آموز</th>
                        <th>نمره</th>
                    </tr>
                </thead>
                    <?php
                        for ($i = 0; $i < count($StudentNames); $i++) {
                            echo "<tr>";
                            echo "<td>" . ($i + 1) . "</td>";
                            echo "<td>" .$StudentNames[$i]. "</td>"; 
                            echo "<td>" .$scores[$i] ."</td>"; 
                            echo "</tr>";
                        }
                    ?>
            </table>

            <div class="buttons">
                <button onclick="location.href='index.php'">فرم جدید</button>
            </div>

        <?php
        } else {
            echo "<p>اطلاعات کافی برای نمایش گزارش وجود ندارد.</p>";
        }
        ?>
    </div>
</body>

</html>