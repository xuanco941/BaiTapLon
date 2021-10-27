<?php
session_start();
    // Tim kiem hotel
    function resultSearch() {
    if(isset($_GET['name_hotel'])){
        $name_hotel = $_GET['name_hotel'];
        $result = searchHotel($name_hotel);
        header('Location: ../views/search.php?name_hotel='.$name_hotel.'');
    }
    else{
        $_SESSION['err'] = 'Không tìm thấy khách sạn này';
        header('Location: ../views/error.php');
    }
}
?>