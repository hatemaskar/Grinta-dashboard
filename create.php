<?php

// Create conenction
$connect = mysqli_connect('127.0.0.1', 'root', '', 'grinta');


$question = '';
$correctAns = '';
$fakeAns1 = '';
$fakeAns2 = '';
$fakeAns3 = '';
$type = '';
$difficulty = '';
$category = '';
$videoURL = '';

$error_Message = '';
$successMessage = '';


//Check if data transimetted using POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $question = $_POST['question'];
    $correctAns = $_POST['correctAns'];
    $fakeAns1 = $_POST['fakeAns1'];
    $fakeAns2 = $_POST['fakeAns2'];
    $fakeAns3 = $_POST['fakeAns3'];
    $type = $_POST['type'];
    $difficulty = $_POST['difficulty'];
    $category = $_POST['category'];
    $videoURL = $_POST['videoURL'];

    // Check required fileds if empty
    do {
        if (empty('question') || empty('correctAns') || empty('category') || empty('type') || empty('difficulty')) {
            $error_Message = ' Question, Correct Answer, Category, Question type and Difficulty are required';
            break;
        }
        //Add new question to database
        $sql = "INSERT INTO questions (question, correctAns, fakeAns1, fakeAns2, fakeAns3, type, difficulty, category, videoURL) VALUES ('" . $question . "' , '" . $correctAns . "' ,'" . $fakeAns1 . "' ,'" . $fakeAns2 . "' ,'" . $fakeAns3 . "' ,'" . $type . "' ,'" . $difficulty . "' ,'" . $category . "' ,'" . $videoURL . "' )";
        $result = $connect->query($sql);

        if (!$result) {
            $error_Message = 'Invalid query' . $connect->error;
            break;
        }

        $question = '';
        $correctAns = '';
        $fakeAns1 = '';
        $fakeAns2 = '';
        $fakeAns3 = '';
        $type = '';
        $difficulty = '';
        $category = '';
        $videoURL = '';

        echo $successMessage = 'Question has been added successfuly!';

        //Redirect the user to Question List
        header('location:/Grinta-dashboard/postQuestions.php');
        exit;

    } while (false);
}


?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            display: flex;
             background-color: #151722;
             font-family: Tajawal;
             color: white;
             margin-top: 100px;
             margin: auto;
             max-width: 800px; 
             align-items: center;      
             justify-content: center;
            }
        .container{
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 style="margin-bottom:50px; text-align:center;">إضافة سؤال</h2>
        <?php
        if (!empty($error_Message)) {
            echo ' <div class="alert alert-warning" role="alert">
            <strong>$error_Message</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
        <form method='POST'>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">السؤال</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="question" value="<?php echo $question; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">الاجابة الصحيحة</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="correctAns" value="<?php echo $correctAns; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">الاجابة الخطأ 1</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="fakeAns1" value="<?php echo $fakeAns1; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">الاجابة الخطأ 2</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="fakeAns2" value="<?php echo $fakeAns2; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">الاجابةالخطأ 3</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="fakeAns3" value="<?php echo $fakeAns3; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">نوع السؤال</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="type" value="<?php echo $type; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">الصعوبة</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="difficulty" value="<?php echo $difficulty; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">التصنيف</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="category" value="<?php echo $category; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">لينك الفيديو</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="videoURL" value="<?php echo $videoURL; ?>">
                </div>
            </div>
            <?php
            if (!empty($successMessage)) {
                echo '<div class="row mb-3">
                    <div class="offset-sm-3 col-sm-6">
                        <div class="alert alert-success" role="alert">
                            <strong>$successMessage</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                
                </div>';
            }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">إضافة</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/Grinta-dashboard/postQuestions.php" role="button">رجوع</a>
                </div>
              
        </form>


    </div>

</body>

</html>