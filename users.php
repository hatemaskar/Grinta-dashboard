<!DOCTYPE html>
<html lang="english">

<head>
  <title>Grinta Dashboard v1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />

  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    figure,
    blockquote,
    figcaption {
      margin: 0;
      padding: 0;
    }

    button {
      background-color: transparent;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    html {
      scroll-behavior: smooth
    }
  </style>
  <style data-tag="default-style-sheet">
    html {
      font-family: Inter;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-gray-black);
      background-color: var(--dl-color-gray-white);

    }
  </style>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div>
    <link href="./desktop3.css" rel="stylesheet" />
    <?php include 'functions.php'; ?>

    <div class="desktop3-container">
      <div class="desktop3-desktop3">
        <img src="public/playground_assets/rectangle171977-xbb9-300w.png" alt="Rectangle171977"
          class="desktop3-rectangle17" />
        <span class="desktop3-text"></span>
        <div class="desktop3-group13">
          <span class="desktop3-text01"><span>لوحة التحكم</span></span>
          <img src="public/playground_assets/vector1977-fk6.svg" alt="Vector1977" class="desktop3-vector" />
          <img src="public/playground_assets/vector1977-1fi.svg" alt="Vector1977" class="desktop3-vector1" />
        </div>
        <div type='' class="desktop3-group14">
          <div class="desktop3-text03"><a href='/users.php'>اللاعبين</a></div>
          <img src="public/playground_assets/vector1977-y39k.svg" alt="Vector1977" class="desktop3-vector2" />
        </div>

        <div class="desktop3-group7">
          <span class="desktop3-text05 users"><span>مستخدمين</span></span>
          <span class="desktop3-text07"><span>
              <?php echo $userNumber; ?>
            </span></span>
        </div>

        <div class="show-usernames" style="display:block;">

          <div class="desktop3-group8">
            <span class="desktop3-text25 users"><span>أسئلة</span></span>
            <span class="desktop3-text27"><span>
                <?php echo $questNumber; ?>
              </span></span>
          </div>
          <div class="desktop3-group17">
            <span class="desktop3-text29 users"><span>أعلى نقاط</span></span>
            <span class="desktop3-text31"><span>
                <?php
            echo '<pre>';
            print_r($maxScore['maxScore']);
            echo '</pre>';


            ?>
              </span></span>
            <span class='users'>
              <?php
            include 'usernames.php';
            ?>
            </span>
          </div>
          <div class="desktop3-group15">
            <span class="desktop3-text33"><span>الأسئلة</span></span>
            <img src="public/playground_assets/vector1978-eujb.svg" alt="Vector1978" class="desktop3-vector3" />
            <img src="public/playground_assets/vector1978-hhel.svg" alt="Vector1978" class="desktop3-vector4" />
          </div>
          <div class="desktop3-group16">
            <span class="desktop3-text35"><span>أضافة سؤال</span></span>
            <img src="public/playground_assets/vector1978-oh4c.svg" alt="Vector1978" class="desktop3-vector5" />
          </div>
          <img src="public/playground_assets/logo21lightzohomail11978-6bvk-200h.png" alt="Logo21Lightzohomail11978"
            class="desktop3-logo21lightzohomail1" />
          <img src="public/playground_assets/logo10111978-ll6-200h.png" alt="logo10111978" class="desktop3-logo1011" />
        </div>
      </div>
    </div>
</body>

</html>