<?php
    function connectDB(){
        $conn = mysqli_connect('localhost','root','','test_btl');
        if($conn){
            return $conn;
        }
        else{
            die('Khong the ket noi toi Database');
        }
    }

?>