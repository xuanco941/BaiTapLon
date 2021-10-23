<?php
    // Tim kiem hotel
    include '../model/hotel.php';
    if(isset($_GET['name_hotel'])){
        $name_hotel = $_GET['name_hotel'];
        $result = searchHotel($name_hotel);
        $row = mysqli_fetch_array($result,MYSQLI_NUM);
        echo $row[1];
    }
?>