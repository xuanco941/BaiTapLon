<?php
    include './model/ticket.php';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $tenkhach = $_POST['tenkhach'] ;
        $gmail = $_POST['gmail'];
        $hotel_name = $_POST['hotel_name'];
        $ngaydat = $_POST['ngaydat'];
        $ngayketthuc = $_POST['ngayketthuc'];
        $yeucau = $_POST['yeucau'];
        $chiphi = $_POST['chiphi'];
        $trangthai = $_POST['trangthai'];

        if(updateTicket($id,$tenkhach,$gmail,$hotel_name,$ngaydat,$ngayketthuc,$yeucau,$chiphi,$trangthai)){
            echo 'thong bao cap nhat ticket thanh cong';
        }
        else{
            echo 'loi cap nhat ticket';
        }
    }
    else{
        echo'thieu thong tin cap nhat ticket';
    }
?>