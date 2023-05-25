<?php 
    require 'connect.php';
    function display($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rowz = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
?>