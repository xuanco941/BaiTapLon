<?php
    // Xoa ticket
    include '../model/ticket.php';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        if(deleteTicket($id)){
            echo 'thong bao xoa ticket thanh cong';
        }
        else{
            echo 'loi xoa ticket';
        }
    }
    else{
        echo'thieu thong tin xoa ticket';
    }
?>