<?php
session_start(["use_strict_mode" => true]);
require('database.php');


if (isset($_GET['register'])) {

    if (isset($_FILES['addfile'])) {
        $fp = fopen($_FILES['addfile']['tmp_name'], 'rb');
        $bin_img = base64_encode(fread($fp, $_FILES['addfile']['size']));
        fclose($fp);
    } else {
        $bin_img = 'NULL';
    }

    $user_id_query = $db->query("SELECT MAX(\"ID_AC\") FROM \"Schema_LW\".\"Аккаунты\"");
    $user_id = $user_id_query->fetch();
    $creds_query = $db->query("INSERT INTO \"Schema_LW\".\"Аккаунты\" VALUES (".($user_id['max']+1).", '".$_POST['login']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['phone']."', '".$bin_img."')");
    $_SESSION['username'] = $_POST['login'];
    $_SESSION['user_id'] = $user_id['max'];
    header("Location: /main.php");
    die();


} else if (isset($_POST['login'])){
    $result = $db->query("SELECT * FROM \"Schema_LW\".\"Аккаунты\" WHERE \"Login\" = '".$_POST['login']."'");


    if ($row = $result->fetch())
    {
        if (($_POST["password"]) == $row['Password']){
            $_SESSION['username'] = $row['Login'];
            $_SESSION['user_id'] = $row['ID_AC'];
            header("Location: ../profile.php");
            die();
        }
        else {
            $_SESSION['message'] = 'Вы ввели неправильный пароль!';
            header("Location: ../login.php");
            die();
        }

    }
    else {
        $_SESSION['message'] = 'Вы ввели неправильный логин!';
        header("Location: ../login.php?");
        die();
    }

}
if ($_GET['logout'] == 1){
    session_unset();
    header("Location: ../login.php");
    die();
}
