<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <style>
        body, table, .tbody, tr, td {
            background-color: #161722;
            font-family: Tajawal;
            font-weight: bold;
            color: white;
        }

        /* table {
            border: 1px solid #b3adad;
            border-collapse: collapse;
            padding: 5px;
            text-align: left;
            border-radius: 5px;



        }

        table th {
            border: 1px solid #b3adad;
            padding: 5px;
            background: #f0f0f0;
            color: #313030;
       
            border-radius: 5px;
        }

        table td {
            border: 1px solid #b3adad;
            text-align: left;
            padding: 5px;
            background: #ffffff;
            color: #313030;
           
        } */
    </style>
</head>

<body>
    <div class="container">
        <div style="position:absolute; padding: 20px;" class="logo">
                <img src="./assets/logo.png" alt="">
            </div>
        <h2 style="padding-top:100px; text-align: center; font-size: 36px;">قائمة الأسئلة</h2>
        <a style="font-family:Tajawal; margin-bottom: 10px;" class="btn btn-primary" href="/Grinta-dashboard/create.php"
            role="button">إضافة سؤال</a>
            <a style="font-family:Tajawal; margin-bottom: 10px;" class="btn btn-primary" href="/Grinta-dashboard/index.php"
            role="button">رجوع</a>
        <br>
        <table class="table" style="vertical-align: center;">
            <thead>
                <tr class="header">
                    <th style=" text-align: center; color:white; background-color:#293c58">رقم السؤال</th>
                    <th id="question" style=" text-align: center; color:white; background-color:#293c58">السؤال</th>
                    <th id="answer" style="color:white; background-color:green">الأجابة الصحيحة</th>
                </tr>
                <tr>
                    <th>أجابة خطأ 1</th>
                    <th>أجابة خطأ 2</th>
                    <th>أجابة خطأ 3</th>
                </tr>
                <tr>
                    <th>نوع السؤال</th>
                    <th>الصعوبة</th>
                    <th>التصنيف</th>
                </tr>
                <tr>
                    <th>رابط الفيديو</th>
                </tr>

            </thead>
            <tbody>
                <?php
                // Create conenction
                $connect = mysqli_connect('127.0.0.1', 'root', '', 'grinta');

                // Check connection
                if ($connect->connect_error) {
                    die("Connection failed: " . $connect->connect_error);
                }

                // Read all row from database table
                $sql = 'SELECT * FROM questions';
                $result = $connect->query($sql);

                if (!$result) {
                    die('Invalid query: ' . $connect_error);
                }

                while ($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                        <td style='width:15px; font-size:18px; color:white; background-color:#293c58; font-weight:bold;border-radius: 16px; text-align:center;margin:10px;'>Q $row[id]</td>
                        <td style='font-size:18px; font-weight:bold; text-align:right; color:white; background-color:#293c58; border-radius: 16px; margin:10px;'>$row[question]</td>
                        <td style='font-size:18px; color:green; font-weight:bold; text-align:center;color:white; background-color:green;border-radius: 16px; margin:10px;' >$row[correctAns]</td>

                        </tr>
                        <tr>
                        <td style='text-align:center;'>$row[fakeAns1]</td>
                        <td style='text-align:center;'>$row[fakeAns2]</td>
                        <td style='text-align:center;'>$row[fakeAns3]</td>
                        </tr>
                        <tr>
                        <td>Type: $row[type]</td>
                        <td>Difficulty: $row[difficulty]</td>
                        <td>Category: $row[category]</td>

                        </tr>
                        <tr>
                        
                        <td  font-family:Tajawal;'>
                        <a class='btn btn-primary btn sm' href='/Grinta-dashboard/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn sm remove' href='/Grinta-dashboard/delete.php?id=$row[id]'>Delete</a> 
                        </td>
                        </tr>

                        ";
                }
                ?>

            </tbody>
        </table>



    </div>

</body>

</html>