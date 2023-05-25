<?php
$conn = mysqli_connect("localhost", "root", "", "tugas" );

if(!$conn){
    die("koneksi tidak berhasil" . mysqli_connect_error()); 
}

?>
