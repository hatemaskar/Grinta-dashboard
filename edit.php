<?php

$connect = mysqli_connect('127.0.0.1', 'root', '', 'grinta');

$id = '';
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

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Read  data from database
    if (!isset($_GET["id"])) {
        header("location: /Grinta-dashboard/index.php");
        exit;
    }

    $id = $_GET["id"];
    $sql = "SELECT * FROM questions WHERE id=$id";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: /Grinta-dashboard/index.php");
        exit;
    }

    $question = $row['question'];
    $correctAns = $row['correctAns'];
    $fakeAns1 = $row['fakeAns1'];
    $fakeAns2 = $row['fakeAns2'];
    $fakeAns3 = $row['fakeAns3'];
    $type = $row['type'];
    $difficulty = $row['difficulty'];
    $category = $row['category'];
    $videoURL = $row['videoURL'];

} else {
    // Update  data to database
    $id = $_POST['id'];
    $question = $_POST['question'];
    $correctAns = $_POST['correctAns'];
    $fakeAns1 = $_POST['fakeAns1'];
    $fakeAns2 = $_POST['fakeAns2'];
    $fakeAns3 = $_POST['fakeAns3'];
    $type = $_POST['type'];
    $difficulty = $_POST['difficulty'];
    $category = $_POST['category'];
    $videoURL = $_POST['videoURL'];

    do {
        if (empty('question') || empty('correctAns') || empty('category') || empty('type') || empty('difficulty')) {
            $error_Message = ' Question, Correct Answer, Category, Question type and Difficulty are required';
            break;
        }

        $sql = "UPDATE questions SET question ='$question', correctAns = '$correctAns', fakeAns1 = '$fakeAns1',fakeAns2 = '$fakeAns2',fakeAns3 = '$fakeAns3',type = '$type',difficulty = '$difficulty',category = '$category',videoURL = '$videoURL' WHERE id='$id'";

        $result = $connect->query($sql);

        if (!$result) {
            $error_Message = 'Invalid query' . $connect->error;
            break;
        }
        $successMessage = 'Question has been updated successfuly!';
        header('location:/Grinta-dashboard/postQuestions.php');
        exit;

    } while (true);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Question</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            margin-top: 100px;
            font-family: Tajawal;
            background-color: #141722;
            color: white;
            font-size: 20px;

        }

        h2 {
            font-weight: bold;
            margin-bottom: 50px;
            font-size: 32px;
        }

        .question,
        .correctAns,
        .category,
        .difficulty,
        .type {
            font-weight: bold;
            font-size: 20px;
        }

        .inputBox {
            text-align: right;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Question</h2>
        <?php
        if (!empty($error_Message)) {
            echo ' <div class="alert alert-warning" role="alert">
            <strong>$error_Message</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
        <form method='POST'>
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label question">Question</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control inputBox" name="question" value="<?php echo $question; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label correctAns">Correct Answer</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control inputBox" name="correctAns"
                        value="<?php echo $correctAns; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fake Answer 1</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control inputBox" name="fakeAns1" value="<?php echo $fakeAns1; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fake Answer 2</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control inputBox" name="fakeAns2" value="<?php echo $fakeAns2; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fake Answer 3</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control inputBox" name="fakeAns3" value="<?php echo $fakeAns3; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label type">Question Type</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control inputBox" name="type" value="<?php echo $type; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label difficulty">Difficulty</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control inputBox" name="difficulty"
                        value="<?php echo $difficulty; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label category">Category</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control inputBox" name="category" value="<?php echo $category; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Video URL</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control inputBox" name="videoURL" value="<?php echo $videoURL; ?>">
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
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/Grinta-dashboard/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>


    </div>

</body>

</html>