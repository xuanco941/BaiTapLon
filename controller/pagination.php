<?php
    function countPageHotel($num){
        $result = selectAllHotel();
        $sum = mysqli_num_rows($result);
        $countPage = 0;
        if(!$sum){
            $sum = 0;
        }
        $countPage = ceil($sum / $num);
        return $countPage;
    }

    function countPageTicket($num){
        $result = selectAllTicket();
        $sum = mysqli_num_rows($result);
        $countPage = 0;
        if(!$sum){
            $sum = 0;
        }
        $countPage = ceil($sum / $num);

        return $countPage;
    }
    
?>
