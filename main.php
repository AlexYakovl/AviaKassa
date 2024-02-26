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
    }

    .card-title{
      font-size: 18px;
      font-weight: bold;
      font-family: 'Comic Sans MS', cursive;
    }


    .container{
      padding: 10px;
      background-image: url("pic/dostav.webp");
      background-repeat: no-repeat;
      height: 1343px;
      background-size: cover;
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
        background-color: rgb(0,0,0);
        padding: 15px;
    }
    .toptext{
        color: darkred;
        font-family: 'Sigmar', cursive;
    }
    .toptext2{
        color: darkred;
        font-family: 'Comic Sans MS', cursive;
    }

  </style>


  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Авиакасса "Five nights at freddy's" </title>
</head>
<body>
<div class="topmid" >
  <h1 class="toptext">Air ticket office << Five nights at freddy's >></h1>
  <p class="toptext" > The best ticket office, because others without Freddy</p>
    <?php if (!isset($_SESSION['username'])): ?>
        <a href="login.php" class="toptext" > LOGIN </a>
    <?php else: ?>
        <a href="Profile.php" class="toptext2" > <?php echo $_SESSION['username']; ?> Личный кабинет</a>
            <?php endif; ?>
</div>
<div class="container">
  <div class="texthold">
        <div class="card">
          <div class="card-title">
            Купить билеты.
          </div>
          <div class="card-body">
            Перейдя по <a href="buyticket.php">ссылке</a>, вы можете приобрести купить билеты на нужный вам рейс
          </div>
        </div>

      <div class="card">
        <div class="card-title">
         О нашей компании.
       </div>
        <div class="card-body">
        Наша компания работает с 1983 года. При сотрудничевстве с «Freddy Fazbear's Pizza». Наша компания имеет большую знаменитость среди детей. Ведь они среди нас.
      </div>
    </div>

    <div class="card">
      <div class="card-title">
        Наши гарантии и условия.
      </div>
      <div class="card-body">
        <a href="garant.php"> Гарантии </a>
      </div>
    </div>

      </div>
  </div>
</body>
</html>