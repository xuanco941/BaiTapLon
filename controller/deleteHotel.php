<?php
session_start();
if (!isset($_SESSION['signinAdmin'])) {
    header('Location: ../admin/index.php');
}
    // Xoa hotel
    include '../model/hotel.php';
    if(isset($_GET['id_hotel'])){
        $id = $_GET['id_hotel'];
        if(deleteHotel($id)){
            header('Location: ../admin/dashboard.php');
        }
        else{
            echo 'loi xoa hotel';
        }
    }
    else{
        echo'thieu thong tin xoa hotel';
    }
