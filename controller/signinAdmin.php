<?php
    // Dang nhap quyen admin
    include './model/admin.php';
    if(isset($_POST['taikhoan']) && isset($_POST['matkhau'])){
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        if(isAdmin($taikhoan,$matkhau)){
            echo 'chuyen sang trang quan ly cua admin';
        }
        else{
            echo 'Dang nhap khong thanh cong';
        }
    }
?>