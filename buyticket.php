<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form45 {
            width: 350px;
            border: 1px solid #ddd;
            padding: 30px;
            text-align: center; /* Выравнивание элементов формы влево */
            
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 85%;
            padding: 5px;
            margin: 5px 0;
        }
        input[type="file"] {
            margin: 5px 0;
        }
        input[type="submit"] {
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .outer-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 600px;
        }

        .container {
            text-align: center; /* Выравнивание текста по центру */
        }
    </style>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        setcookie("user_number", $number, time() + 3600);
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        setcookie("user_name", $name, time() + 3600);
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        setcookie("user_email", $email, time() + 3600);
    }
    if (isset($_POST['ticketType'])) {
        $ticketType = $_POST['ticketType'];
        setcookie("user_ticket_type", $ticketType, time() + 3600);
    }

    if (isset($_FILES["photo"])) {
        $uploadDir = "uploads/";
        $uploadFile = $uploadDir . basename($_FILES["photo"]["name"]);

        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadFile)) {
            $uploadedFile = $uploadFile;
            setcookie("user_photo", $uploadedFile, time() + 3600);
        } else {
            echo "Ошибка при загрузке файла.";
        }
    }
}

echo "Nomer bilet: $number <br> Imya kupuvshego: $name <br> Email: $email <br> Tip bileta: $ticketType";
if (!empty($uploadedFile)) {
    echo "<br><img src='$uploadedFile' alt='Foto bileta' width='200'><br>";
}

$number = isset($_POST['number']) ? $_POST['number'] : (isset($_COOKIE["user_number"]) ? $_COOKIE["user_number"] : "");
$name = isset($_POST['name']) ? $_POST['name'] : (isset($_COOKIE["user_name"]) ? $_COOKIE["user_name"] : "");
$email = isset($_POST['email']) ? $_POST['email'] : (isset($_COOKIE["user_email"]) ? $_COOKIE["user_email"] : "");
$ticketType = isset($_POST['ticketType']) ? $_POST['ticketType'] : (isset($_COOKIE["user_ticket_type"]) ? $_COOKIE["user_ticket_type"] : "");
$uploadedFile = isset($_POST['ticketType']) ? $_POST['ticketType'] : (isset($_COOKIE["user_photo"]) ? $_COOKIE["user_photo"] : "");

?>
 <div class="outer-container">
        <div class="container">
            <h3>Покупка билетов</h3>
            <form method="POST" class="form45" enctype="multipart/form-data">
                Номер билета: <input type="text" name="number" required value="<?php echo $number; ?>"/><br>
                Имя покупателя: <input type="text" name="name" required value="<?php echo $name; ?>" /><br>
                Email: <input type="email" name="email" required value="<?php echo $email; ?>" /><br>
                Тип билета: 
                <select name="ticketType" required>
                    <option value="Обычный" <?php echo ($ticketType == 'Обычный') ? 'selected' : ''; ?>>Обычный</option>
                    <option value="VIP" <?php echo ($ticketType == 'VIP') ? 'selected' : ''; ?>>VIP</option>
                    <option value="Детский" <?php echo ($ticketType == 'Детский') ? 'selected' : ''; ?>>Детский</option>
                </select><br>
                Загрузить фото билета: <input type="file" name="photo" accept="image/*"><br>
                <input type="submit" value="Купить билет">
            </form>
            <br><br>
            <a href="main.php?page=page1">Вернуться</a>
        </div>
    </div>
</body>
</html>