<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>

<style>
    body {
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
        font-size: 16px;
    }

    h1, h2 {
        color: rgb(16, 41, 92);
    }

    p {
        color: #555;
        line-height: 1.5;
    }

    form {
        display: inline-block;
        margin-top: 20px;
    }

    input[type=submit] {
        background-color: #007bff;
        border: none;
        color: #fff;
        font-size: 16px;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 4px 2px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #0056b3;
    }
    button {
        background-color: #007bff;
        border: none;
        color: #fff;
        font-size: 16px;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 4px 2px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
    a {
        color: white;
    }
</style>

<html>
<head>
    <title>Личный кабинет</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Личный кабинет</h1>
<p>Добро пожаловать, <?php echo $_SESSION['username']; ?>!</p>

<h2>Информация о пользователе</h2>
<p>Имя пользователя: <?php echo $_SESSION['username']; ?></p>
<p>Email пользователя: <?php echo $_SESSION['pochta']; ?></p>

<form action="auth.php" method="get">
    <input type="hidden" name="logout" value="1" />
    <input type="submit" value="Выйти" />
</form>
<div>
    <button> <a href="main.php"> На главную </a></button>
</div>

</body>
</html>
