<?php
    // Them hotel
    include '../model/hotel.php';
    include '../controller/uploadImg.php';
    if(isset($_POST['name_hotel'])){

        $name_hotel = '';
        $phone = '';
        $place = '';
        $soluongphong = 0;
        $nhahang = false;
        $phonghop = false;
        $damcuoi = false;
        $massage = false;
        $mota = '';
        $trangthai = true;

        isset($_POST['phone']) ? $phone = $_POST['phone'] : $phone = '';
        isset($_POST['name_hotel']) ? $name_hotel = trim($_POST['name_hotel'] , ' ') : $name_hotel = '';
        isset($_POST['place']) ? $place = $_POST['place'] : $place = '';
        isset($_POST['soluongphong']) ? $soluongphong = $_POST['soluongphong'] : $soluongphong = 0;
        isset($_POST['nhahang']) ? $nhahang = true : $nhahang = false;
        isset($_POST['phonghop']) ? $phonghop = true : $phonghop = false;
        isset($_POST['damcuoi']) ? $damcuoi = true : $damcuoi = false;
        isset($_POST['massage']) ? $massage = true : $massage = false;
        isset($_POST['mota']) ? $mota = $_POST['mota'] : $mota = '';

        if(isset($_FILES['img']) && $_FILES['img']['name'] != ''){
            $img = $_FILES['img'];
            if(insertHotel($name_hotel,$phone,$place,$soluongphong,$nhahang,$phonghop,$damcuoi,$massage,$mota,$trangthai,$img['name']) && upImg($img)){
                header('Location: ../admin/dashboard.php');
            }
            else{
                echo 'loi them hotel';
            }
        }
        else{
            insertHotelNoImg($name_hotel,$phone,$place,$soluongphong,$nhahang,$phonghop,$damcuoi,$massage,$mota,$trangthai);
            header('Location: ../admin/dashboard.php');
        }
    }
    else{
        echo'thieu thong tin hotel';
    }
