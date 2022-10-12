<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
$mysql_select_db($db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * form loginform where user='".$uname."'AND password='".$password."' limit 1";

    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo "You Have Successfully Log In";
        exit();
    }
    else{
        echo "You Have Entered Incorrect Password";
        exit();
    }
}

?>

<!--pakai variable HOST, USER, PASSWORD, dan DB buat konekin php dan mysql
    limit 1 di .$password. yaitu batas utk mengakhiri nilai kolom basis data kedua nilai kanan
    baris 19 fungsinya cek di database tersedia atau tidak-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Here</title>
    <link rel="stylesheet" a href="css3\style.css"/>
    <link rel="stylesheet" a href="css3\font-awesome.min.css"/>
</head>
<body>
    <div class="container">
        <img src="image\login.png"/>
        <form method="POST" action="#"> <!--pakai hashtag karena mau menampilkan pesan apapun di halaman ini dengan benar-->
            <div class="form-input">
            <input type="text" name="username" placeholder="Enter Your Username"/>
            </div>

            <div class="form-input">
            <input type="password" name="password" placeholder="Enter Your Password"/>
            </div>

            <input type="submit" name="submit" value="LOGIN" class="btn-login"/>
        </form>
    </div>
</body>
</html>