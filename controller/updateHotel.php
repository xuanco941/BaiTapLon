<?php
    include './model/hotel.php';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $name_hotel = $_POST['name_hotel'] ;
        $phone = $_POST['phone'];
        $place = $_POST['place'];
        $soluongphong = $_POST['soluongphong'];
        $nhahang = $_POST['nhahang'];
        $phonghop = $_POST['phonghop'];
        $damcuoi = $_POST['damcuoi'];
        $message = $_POST['message'];
        $mota = $_POST['mota'];
        $trangthai = $_POST['trangthai'];

        if(updateHotel($id,$name_hotel,$phone,$place,$soluongphong,$nhahang,$phonghop,$damcuoi,$message,$mota,$trangthai)){
            echo 'thong bao cap nhat hotel thanh cong';
        }
        else{
            echo 'loi cap nhat hotel';
        }
    }
    else{
        echo'thieu thong tin cap nhat hotel';
    }
?>