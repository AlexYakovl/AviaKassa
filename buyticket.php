<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$number = "";
$name = "";
$email = "";
$ticketType = "";
$uploadedFile = "";

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

$number = isset($_COOKIE["user_number"]) ? $_COOKIE["user_number"] : "";
$name = isset($_COOKIE["user_name"]) ? $_COOKIE["user_name"] : "";
$email = isset($_COOKIE["user_email"]) ? $_COOKIE["user_email"] : "";
$ticketType = isset($_COOKIE["user_ticket_type"]) ? $_COOKIE["user_ticket_type"] : "";
$uploadedFile = isset($_COOKIE["user_photo"]) ? $_COOKIE["user_photo"] : "";

echo "Nomernoy bilet: $number <br> Imya kupuvshego: $name <br> Email: $email <br> Tip bileta: $ticketType";
if (!empty($uploadedFile)) {
    echo "<br><img src='$uploadedFile' alt='Foto bileta' width='200'><br>";
}
?>
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
<a href="main.php">
    Вернуться
</a>
<br><br>
</body>
</html>