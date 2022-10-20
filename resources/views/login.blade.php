<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem; font-weight: 850px;">LOGIN</p>
            <div class="input-group"><input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required > </div>
            <div class="input-group"><input type="password" placeholder="Password" name="password" value="<?php echo $_POST['$password']; ?> required"></div>
            <div class="input-group"><button name="submit" class="btn">Login</button></div>
            <p class="login-register-text">Belum Punya Akun?<a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>