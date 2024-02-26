<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/register_main.css">
    <link rel="stylesheet" href="./styles/style.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .register-header {
            text-align: center;
            font-size: 24px;
            margin-top: 0;
        }

        .form {
            margin-top: 20px;
        }

        .form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-input {
            width: 95%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .login-para {
            text-align: center;
            margin-top: 20px;
        }

        .login-anchor {
            color: #007bff;
            text-decoration: none;
        }

        .register-btn {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .register-btn:hover {
            background-color: #0056b3;
        }
    </style>
    <script src="./js/header.js" defer></script>
    <script src="./js/register_main.js" defer></script>
    <title>Register</title>
</head>
<body>
<main class="main">
    <div class="container">
        <h1 class="register-header">Register</h1>
        <form action="auth.php?register=1" method="post" class="form" id="registerForm" enctype="multipart/form-data" >
            <label for="login">Login</label>
            <input id="loginInput" class="unfilled form-input lname-input" type="text" name="login" placeholder="Login" required>
            <label for="login">Email Address</label>
            <input id="emailInput" class="unfilled form-input email-input" type="email" name="email" placeholder="test@email.ru" minlength="5" maxlength="148" required>
            <label for="password">Password</label>
            <input id="pwdInput" class="unfilled form-input pwd-input" type="password" name="password" placeholder="********"  maxlength="32" required>
            <label for="confpassword">Confirm Password</label>
            <input id="confPwdInput" class="unfilled form-input conf-pwd-input" type="password" name="confpassword" placeholder="********" maxlength="32" required>
            <label for="nomer">Phone number</label>
            <input id="nomer" class="unfilled form-input phone-input" type="text"  name="phone" placeholder="+79225843481" required>
            <label for="picture" >Attach passport</label>
            <input type="file" name="addfile" id="picture" >
        </form>
        <p class="login-para">Already have an account? <a class="login-anchor" href="./login.php">Log In</a>.</p>
        <button form="registerForm" type="submit" class="register-btn" value="Verify" name="verify">Register</button>
    </div>
</main>
</body>
</html>