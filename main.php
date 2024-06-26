<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <style>
    *{
      box-sizing: border-box;
    }
    body {
      padding: 0;
      margin: 0;
      background-color: #eaeaea;
    }

    .card{
      padding: 20px;
      background: white;
      border-radius: 20px;
      margin-top: 20px;
      font-family: 'Comic Sans MS', cursive;
      width: 350px;
      border-style: solid;
      border-width: 3px;
      border-color: rgb(16, 41, 92);
    }

    .card-title{
      font-size: 18px;
      font-weight: bold;
      font-family: 'Comic Sans MS', cursive;
      
    }


    .container{
      padding: 10px;
      background-image: url("pic/fon.jpg");
      background-repeat: no-repeat;
      height: 1110px;
      text-align: center;
    }

    .texthold{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 60px;
        flex-wrap: wrap;
    }

    .topmid > * {
      margin: 0;
    }

    .topmid{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 10px;
        background-color: rgb(255, 255, 255);
        padding: 15px;
        border-style: solid;
        border-width: 3px;
        border-color: rgb(16, 41, 92);
    }
    .toptext{
        color: rgb(16, 41, 92);
        font-family: 'Comic Sans MS';
        font-size: 32px;
    }
    .toptext2{
        color: rgb(16, 41, 92);
        font-family: 'Comic Sans MS';
        font-size: 24Px;
    }
    .toptext3{
        font-family: 'Comic Sans MS', cursive;
    }
    .link{
        color: rgb(16, 41, 92);
        font-family: 'Comic Sans MS';
        font-size: 24Px;
        text-align:  center;
        list-style-type: none;
        padding: 0;
    }
  </style>


  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Авиакасса "Five nights at freddy's" </title>
</head>
<body>
<div class="topmid" >
  <h1 class="toptext">Air ticket office << Five nights at freddy's >></h1>
  <p class="toptext2" > The best ticket office, because others without Freddy</p>
    <?php if (!isset($_SESSION['username'])): ?>
        <a href="login.php" class="toptext3" > LOGIN </a>
    <?php else: ?>
        <a href="Profile.php" class="toptext3" > <?php echo $_SESSION['username']; ?> Личный кабинет</a>
            <?php endif; ?>
</div>
<div class="container">
<?php
        // Проверяем, был ли передан GET-параметр "page"
        if(isset($_GET['page'])) {
            // Если передан, отображаем только содержимое выбранной страницы
            $page = $_GET['page'];
            if($page == 'page1') {
                include 'info.php';
            } elseif($page == 'page2') {
                include 'garant.php';
            } else {
                echo "Страница не найдена.";
            }
        } else {
            // Если GET-параметр не передан, отображаем верхние ссылки
    ?>
            <ul class="link" >
                <li><a href="main.php?page=page1" >Общая информация</a></li>
                <li><a href="main.php?page=page2" >Гарантии</a></li>
            </ul>
    <?php } ?>
      </div>
  </div>
</body>
</html>