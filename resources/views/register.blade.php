<?php
include "config.php";
error_reporting(0);
session_start();
if (isset($_SESSION["username"])){
    header("location:index.php");
}
if (isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    // pakai md5 supaya gabisa di hack
    $kpassword = md5($_POST["kpassword"])
    if($password==$_kpassword){
        $sql="SELECT*FROM user WHERE email='$email'";
        $result=mysqli_query($conn, $sql);

        if(!result->num_rows >0){
            $sql = "INSERT INTO users ('username','email','password')";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo"<script> alert('User Regristration Completed!')</script>";
                $username = "";
                $email = "";
                $_POST ['password']="";
                $_POST ['kpassword']="";
            }

            else {echo"<script> alert('Ada yang Salah, Silahkan Ulangi Kembali!')</script>";}
            else {echo"<script> alert ('Email Sudah Digunakan')</script>";}
            else {echo"<script> alert ('Password Salah!')</script>";}
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem; font-weight: 850px;">REGISTER</p>
            <div class="input-group"><input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>"></div>
            <div class="input-group"><input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>"></div>
            <div class="input-group"><input type="password" placeholder="Password" name="password" value="<?php echo $_POST["password"]; ?>" required></div>
            <div class="input-group"><input type="password" placeholder="Konfirmasi Password" name="kpassword" <?php echo $_POST["kpassword"]; ?>></div>
            <div class="input-group"><button name="submit" class="btn">Register</button></div>
            <p class="login-register-text">Sudah Punya Akun? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>