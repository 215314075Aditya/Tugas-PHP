<?php 
    require 'connect.php';

    function tambahh($data){
        $bedaUser = $_SESSION["idUser"];
        global $conn;
        $kegiatan = $data["kegiatan"];
        $status = "Belum Selesai";

        //$query = "INSERT INTO todolist (kegiatan, status) VALUES ('$kegiatan', '$status')";
        $query = "INSERT INTO todolist (id_User, kegiatan, status) VALUES ('$bedaUser', '$kegiatan', '$status')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    ?>