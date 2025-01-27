<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه ثبت نمرات</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-container">
        <h1>سامانه ثبت‌ نمرات دانش آموزان</h1>
        <form method="get" action="Entering grades.php">
            <label for="TeacherName">نام دبیر: </label>
            <input type="text" id="TeacherName" name="TeacherName" placeholder="نام و نام خانوادگی خود را به طور کامل وارد کنید." required>

            <label for="lessons">نام درس: </label>
            <select id="lessons" name="lessons" required>
                <option >انتخاب کنید</option>
                <option >دانش فنی</option>
                <option >تولید محتوا الکترونیک</option>
                <option >نصب و راه‌اندازی سیستم های رایانه‌ای</option>
                <option >نقشه‌کشی فنی رایانه‌ای</option>
                <option >پیاده‌سازی سیستم های اطلاعاتی و طراحی وب</option>
                <option >توسعه برنامه‌سازی و پایگاه داده</option>
                <option >نصب و نگهداری تجهیزات شبکه و سخت‌افزار</option>
                <option >تجارت التکترونیک و امنیت شبکه</option>
                <option >دانش فنی تخصصی</option>
            </select>

            <label for="educationLevel">پایه: </label>
            <select id="educationLevel" name="educationLevel" required>
                <option value="">انتخاب کنید</option>
                <option >دهم</option>
                <option >یازدهم</option>
                <option >دوازدهم</option>
            </select>

            <label for="StudentNum">تعداد دانش آموزان:</label>
            <input type="number" id="StudentNum" name="StudentNum" placeholder="حداکثر 30 نفر" required>
            <button type="button" id="button">ادامه</button>
        </form>
    </div>

    <script>
        var button = document.getElementById('button');

        button.addEventListener('click', function () {
            var StudentNum = parseInt(document.getElementById('StudentNum').value);
            if (StudentNum > 0 && StudentNum <= 30) {
                button.type = "submit"; 
            } else {
                alert("تعداد دانش آموزان باید بین 1 تا 30 نفر باشد.");
            }
        });
    </script>
</body>

</html>