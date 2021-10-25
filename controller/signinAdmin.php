<?php

    session_start();
    // Dang nhap quyen admin
    include '../model/admin.php';
    if(isset($_POST['taikhoan']) && isset($_POST['matkhau'])){
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        if(isAdmin($taikhoan,$matkhau)){
            $_SESSION['signinAdmin'] = $taikhoan;
            header('Location: ../admin/dashboard.php');
        }
        else{
            $_SESSION['notify_admin'] = 'Tài khoản hoặc mật khẩu không chính xác';
        }
    }
?>