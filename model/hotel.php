<?php
    include './connectDB.php';

    function selectAllHotel(){
        $conn = connectDB();
        $sql = 'select * from hotel_info';
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count>=1){
            return $result;
        }
        else{
            echo 'loi lay du lieu tu bang hotel_info'; 
        }
        mysqli_close($conn);
    }


    function insertHotel($name_hotel,$phone,$place,$soluongphong,$nhahang,$phonghop,$damcuoi,$message,$mota,$trangthai){
        $conn = connectDB();
        $sql = "INSERT INTO `hotel_info`( `name_hotel `, `phone`, `place`, `soluongphong`, `nhahang`, `phonghop`, `damcuoi`, `message`, `mota`, `trangthai`) 
        VALUES ('$name_hotel','$phone','$place',$soluongphong,$nhahang,$phonghop,$damcuoi,$message,'$mota','$trangthai')";
        $result = mysqli_query($conn,$sql);
        if($result==true){
            return true;
        }
        else{
            return false;
        }
        mysqli_close($conn);
    }

    function updateHotel($id,$name_hotel,$phone,$place,$soluongphong,$nhahang,$phonghop,$damcuoi,$message,$mota,$trangthai){
        $conn = connectDB();
        $sql = "UPDATE `hotel_info` SET `name_hotel`='$name_hotel',`phone`='$phone',`place`='$place',`soluongphong`=$soluongphong,`nhahang`=$nhahang,
        `phonghop`=$phonghop,`damcuoi`=$damcuoi,`message`=$message,`mota`='$mota',`trangthai`= $trangthai WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        if($result==true){
            return true;
        }
        else{
            return false;
        }
        mysqli_close($conn);
    }

    function deleteHotel($id){
        $conn = connectDB();
        $sql = "DELETE FROM `hotel_info` WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        if($result==true){
            return true;
        }
        else{
            return false;
        }
        mysqli_close($conn);
    }
?>