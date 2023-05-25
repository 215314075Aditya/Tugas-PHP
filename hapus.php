<?php 
    require 'connect.php';
    function hapuss($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM todolist WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
?>