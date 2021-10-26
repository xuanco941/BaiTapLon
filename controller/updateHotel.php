<?php
session_start();
if (!isset($_SESSION['signinAdmin'])) {
    header('Location: ../admin/index.php');
}
    // Cap nhat hotel
    include '../model/hotel.php';
    include './uploadImg.php';

    if(isset($_POST['id_hotel'])){
        $id_hotel = $_POST['id_hotel'];
        $name_hotel = '';
        $phone = '';
        $place = '';
        $soluongphong = 0;
        $nhahang = false;
        $phonghop = false;
        $damcuoi = false;
        $massage = false;
        $mota = '';
        $name_hotel = $_POST['name_hotel'] ;
        $phone = $_POST['phone'];
        $place = $_POST['place'];
        $soluongphong = $_POST['soluongphong'];

        isset($_POST['phone']) ? $phone = $_POST['phone'] : $phone = '';
        isset($_POST['name_hotel']) ? $name_hotel = $_POST['name_hotel'] : $name_hotel = '';
        isset($_POST['place']) ? $place = $_POST['place'] : $place = '';
        isset($_POST['soluongphong']) ? $soluongphong = $_POST['soluongphong'] : $soluongphong = 0;
        isset($_POST['nhahang']) ? $nhahang = true : $nhahang = false;
        isset($_POST['phonghop']) ? $phonghop = true : $phonghop = false;
        isset($_POST['damcuoi']) ? $damcuoi = true : $damcuoi = false;
        isset($_POST['massage']) ? $massage = true : $massage = false;
        isset($_POST['mota']) ? $mota = $_POST['mota'] : $mota = '';
        isset($_POST['trangthai']) ? $trangthai = true : $trangthai = false;

        if(isset($_FILES['img']) && $_FILES['img']['name'] != ''){
            $img = $_FILES['img'];
            if(updateHotel($id_hotel,$name_hotel,$phone,$place,$soluongphong,$nhahang,$phonghop,$damcuoi,$massage,$mota,$trangthai,$img['name']) && upImg($img)){
                header('Location: ../admin/dashboard.php');
            }
            else{
                echo 'loi cap nhat hotel';
            }
        }
        else{
            updateHotelNoImg($id_hotel,$name_hotel,$phone,$place,$soluongphong,$nhahang,$phonghop,$damcuoi,$massage,$mota,$trangthai);
            header('Location: ../admin/dashboard.php');
        }

        
    }
    else{
        echo'thieu thong tin cap nhat hotel';
    }
?>