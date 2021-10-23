<?php
    // Xoa hotel
    include './model/hotel.php';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        if(deleteHotel($id)){
            echo 'thong bao xoa hotel thanh cong';
        }
        else{
            echo 'loi xoa hotel';
        }
    }
    else{
        echo'thieu thong tin xoa hotel';
    }
?>