<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grinta Dashboard V2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./stylev2.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./scripts/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="side-menu-continer">
            <div class="side-menu-items">
            <div class="logo">
                <img src="./assets/logo.png" alt="">
            </div>
            <div class="menu-items">
                <div>الرئيسية</div>
                <div><a href="./usernames.php">اللاعبين</a></div>
                <div><a href="./postQuestions.php">الأسئلة</a></div>
                <div>الإعدادات</div>
            </div>
            </div>

        </div>
        <div class="body-warpper">
            <div class="header">
                <div id="header-users">
                    <div>عدد المستخدمين</div>
                    <div id="php-numbers">
                        <?php echo $userNumber; ?>
                    </div>
                </div>
                <div id="header-questions">
                    <div>عدد الاسئلة</div>
                    <div id="php-numbers">
                        <?php echo $questNumber; ?>
                    </div>
                </div>
                <div id="header-max-score">
                    <div>أعلى نقاط</div>
                    <div id="php-numbers">
                        <?php
                        echo '<pre>';
                        print_r($maxScore['maxScore']);
                        echo '</pre>'; ?>
                    </div>
                </div>
            </div>
            <div class="data-area">
                <h2>Hello </h2>
                <div id="player-data">
                    <?php include 'usernames.php' ?>
                </div>
            </div>
           

        </div>
       
    </div>

</body>

</html>