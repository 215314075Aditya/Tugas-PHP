<?php
session_start();

if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

require 'connect.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) === 1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            //set session
            $_SESSION["login"] = true;
            $_SESSION["idUser"] = $row["id"];

            header("Location: index.php");
            exit;
        }
    }

    $error = true;

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="st.css">
    </head>

    <body>

    <div class="container">
       
                    <p>Aditya Putra Wicaksana</p>
                    <p>215314075</p>
                    
                    <img src="foto.jpeg" alt="Image" width="40% " >
                    <p>Hallo, Selamat Datang  ...................</p>
                    <p>SILAHKAN LOGIN TERLEBIH DAHULU</p>
        
            <!--akan dijalankan ketika password error atau salah-->
            <?php 
            if(isset($error)) : 
            ?>
            <p style="color: black; font-weight: bold; border: 1px solid black; padding: 10px;">
            Username / Password Anda Salah !! Silahkan Input Kembali
                </p>

            <?php
                endif;
            ?>

            <form action="" method="post">
                <ul>        
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                <br><br>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                <br><br>
                <button type="submit" name="login">Login</button>
                <br><br>
                <br><br>
                <div class="Regis">
                <p >Belum memiliki AKun? Silihakan <a href="Registrassi.php"> REGISTRASI DISINI</a></p>
                </div>
                </ul>
            </form>
        </div>
    </body>
</html>