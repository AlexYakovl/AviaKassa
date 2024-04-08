<?php
require_once ("database.php");

if (isset($_SESSION['message']))
    echo($_SESSION['message']);
unset($_SESSION['message']);
?>
<style>
    .auth-form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    input[type="text"],
    input[type="password"] {
        width: 100%;
        margin-bottom: 20px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
    }
    input[type="submit"] {
        width: 100%;
        background-color: #007bff;
        color: white;
        padding: 12px 20px;
        margin-top: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    button {
        background-color: #007bff;
        border: none;
        color: white;
        padding: 12px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    button:hover {
        background-color: #0056b3;
    }
    a {
        color: whitesmoke;
        font-size: 16px;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    .text{
        font-family: 'Comic Sans MS', cursive;
        font-size: 24px;
    }

</style>

<div class="auth-form">
    <h class="text"> Вход в аккаунт </h><br>
    <form action="auth.php" method="POST">
        <input type="text" name="login" required placeholder="Логин">
        <input type="password" name="password" required placeholder="Пароль">
        <input type="submit" name="sender" value="Войти">
    </form>

    <?php if (!isset($_SESSION['username'])): ?>
       <button> <a href="reg.php">Зарегистрироваться</a></button>
    <?php else: ?>
        <button ><a href="auth.php?logout=1">Выйти из учетной записи</a></button>
    <?php endif; ?>

</div>
<button> <a href="main.php">Вернуться на главную страницу</a> </button>