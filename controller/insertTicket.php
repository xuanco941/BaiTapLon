<?php
session_start();
    // Them ticket
    include '../model/ticket.php';
    if(isset($_POST['gmail']) && isset($_POST['name_hotel'])){
        $tenkhach = $_POST['tenkhach'] ;
        $gmail = $_POST['gmail'];
        $name_hotel = $_POST['name_hotel'];
        $ngaydat = $_POST['ngaydat'];
        $ngayketthuc = $_POST['ngayketthuc'];
        $yeucau = $_POST['yeucau'];
        $chiphi = $_POST['chiphi'];
        $trangthai = $_POST['trangthai'];
        $id_hotel = $_POST['id_hotel'];
        $id_user = $_POST['id_user'];
        if(insertTicket($tenkhach,$gmail,$name_hotel,$ngaydat,$ngayketthuc,$yeucau,$chiphi,$trangthai,$id_hotel,$id_user)){
            header('Location: ../views/ticket.php?gmail='.$gmail.'');
        }
        else{
            $_SESSION['err'] = 'Lỗi, không thể đặt vé';
            header('Location: ../views/error.php');
        }
    }
    else{
        echo'thieu thong tin gmail hoac ten khach san';
    }
?>

