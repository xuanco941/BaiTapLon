<?php
    function connectDB(){
        $conn = mysqli_connect('localhost','root','','hotel');
        if($conn){
            return $conn;
        }
        else{
            die('Khong the ket noi toi Database');
        }
    }
    
    function isAdmin($taikhoan,$matkhau){
        $conn = connectDB();
        $sql = "select * from where taikhoan='$taikhoan' and matkhau='$matkhau'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count>=1){
            return true;
        }
        else{
            return false;
        }
        mysqli_close($conn);
    }
?>