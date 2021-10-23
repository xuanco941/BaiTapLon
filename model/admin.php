<?php
    include './connectDB.php';
    
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