<?php
require 'connect.php';
require 'tambah.php';
require 'Selesai.php';
require 'hapus.php';
require 'functionRegis.php';


if(isset($_POST["register"])){
    if(Registrassi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Registrasi</title>
        <style>
            label{
                display: block;
            }
        </style>
        <link rel="stylesheet" href="st.css">
    </head>

    <body>
        
    
        <form action="" method="post">
            <div class="reg">
            <h1>Halaman Registrasi New User</h1>
            <ul>
                    <label for="username">Username :
                        <input type="text" name="username" id="username">
                    </label>
                <br>
                    <label for="password">Password : 
                        <input type="password" name="password" id="password">
                    </label>
                <br>
                    <label for="password2">Konfirmasi Password : 
                        <input type="password" name="password2" id="password2">
                    </label>
                <br><br>
                    <button type="submit" name="register">Daftar!</button>
            </ul>
           

        </form>

        
            <p> Sudah terdaftar? Silahkan Login
                <a href="Login.php">Di Link Ini!</a>
            </p>
        
    </body>
</html>