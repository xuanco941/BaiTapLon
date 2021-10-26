<?php
    function countPageHotel($num){
        $result = selectAllHotel();
        $sum = mysqli_num_rows($result);
        $countPage = ceil($sum / $num);
        return $countPage;
    }
?>
