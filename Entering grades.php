<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جدول ثبت نمرات</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-container">
        <h1>جدول ثبت نمرات</h1>
        
        <?php
        if (
            isset($_GET['StudentNum']) && !empty($_GET['StudentNum'])
        ) {
            $StudentNum = $_GET['StudentNum'];
        ?>
        <form method="get" action="Final registration grades.php">
            <table>
                <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>نام و نام خانوادگی دانش آموزان</th>
                        <th>نمره</th>
                    </tr>
                </thead>

                <?php 
                    for ($i = 1; $i <= $StudentNum; $i++) {
                        echo "<tr>";
                        echo "<td>$i</td>"; 
                        echo "<td><input type='text' name='StudentName[]' required></td>";
                        echo "<td><input type='text' name='score[]' required></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            <div class="buttons">
                <button type="button" onclick="location.href='index.php'">بازگشت</button>
                <button type="submit">ثبت نمرات</button>
            </div>
        </form>

        <?php
        }else {
            echo "<p>اطلاعات وارد شده ناقص است.</p>";
        }
        ?>
    </div>
</body>

</html>