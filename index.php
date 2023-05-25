<?php 
session_start();

$bedaUser = $_SESSION["idUser"];
if(!isset($_SESSION["login"])){
    header("Location: Login.php");
    exit;
}


require 'connect.php';
require 'tambah.php';
require 'display.php';
require 'Selesai.php';
require 'hapus.php';

global $conn;
if (isset($_POST["submit"])) {
    if (tambahh($_POST) > 0) {
        echo "Data sukses ditambahkan";
    } else {
        echo "Data gagal";
    }
}

if(isset($_GET["update"])){
    $id = $_GET["update"];
    if(Selesaii($id)>0){
        echo "succes update data";
    } else {
        echo "fail update data";
    }
}
if(isset($_GET["delete"])){
    $id = $_GET["delete"];
    if(hapuss($id) > 0){
        echo "succes delete data";
  
    } else {
        echo "fail delete data";
       
    }
}
    $query = "SELECT * FROM todolist WHERE id_User = $bedaUser";
    $resultTudu = display($query);
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="border.css">
    
    <title>Document</title>
    </head>

        <title>Halaman Admin</title>
    </head>

    <body>
    <div class="container">
        <div class="box">
            
        <a href="Logout.php">Logout</a>

            <h1> To Do List </h1>
            <form action="" method="post">
                <label for="kegiatan">Kegiatan Baru : </label>
                <input type="text" name="kegiatan">
                <button type="submit" name="submit"> Tambah</button>
                <br><br>
            </form>

            <table border="1" cellpadding="10" cellspacing="0">

                <tr>
                    <th>Id</th>
                    <th>Kegiatan</th>
                    <th>Status</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($resultTudu as $elemen) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $elemen["kegiatan"] ?></td>
                    <td><?= $elemen["status"] ?>
                        <a href="?update=<?= $elemen["id"] ?>">Selesai</a> 
                        |
                        <a href="?delete=<?= $elemen["id"] ?>">Hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
        </div>
    </body>
</html>