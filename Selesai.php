<?php 
    require 'connect.php';
    function Selesaii($id){
        global $conn;
        $query = "UPDATE todolist SET status = 'Selesai' WHERE id = $id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);    

        
    }
    ?>