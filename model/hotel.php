<?php
    function connectDB(){
        $conn = mysqli_connect('localhost','root','','hotel');
        if($conn){
            return $conn;
        }
        else{
            die('Khong the ket noi toi Database');
        }
    }

    function selectAllHotel(){
        $conn = connectDB();
        $sql = 'select * from hotel_info';
        $result = mysqli_query($conn,$sql);
        return $result;
        
        mysqli_close($conn);
    }


    function insertHotel($name_hotel,$phone,$place,$soluongphong,$nhahang,$phonghop,$damcuoi,$massage,$mota,$trangthai,$img){
        $conn = connectDB();
        $sql = "INSERT INTO hotel_info ( name_hotel , phone, place, soluongphong, nhahang, phonghop, damcuoi, massage, mota, trangthai,img) 
        VALUES ('$name_hotel','$phone','$place','$soluongphong','$nhahang','$phonghop','$damcuoi','$massage','$mota','$trangthai','$img')";
        $result = mysqli_query($conn,$sql);
        if($result==true){
            return true;
        }
        else{
            return false;
        }
        mysqli_close($conn);
    }
    function insertHotelNoImg($name_hotel,$phone,$place,$soluongphong,$nhahang,$phonghop,$damcuoi,$massage,$mota,$trangthai){
        $conn = connectDB();
        $sql = "INSERT INTO hotel_info ( name_hotel , phone, place, soluongphong, nhahang, phonghop, damcuoi, massage, mota, trangthai) 
        VALUES ('$name_hotel','$phone','$place','$soluongphong','$nhahang','$phonghop','$damcuoi','$massage','$mota','$trangthai')";
        $result = mysqli_query($conn,$sql);
        if($result==true){
            return true;
        }
        else{
            return false;
        }
        mysqli_close($conn);
    }

    function updateHotel($id,$name_hotel,$phone,$place,$soluongphong,$nhahang,$phonghop,$damcuoi,$massage,$mota,$trangthai,$img){
        $conn = connectDB();
        $sql = "UPDATE hotel_info SET name_hotel='$name_hotel',phone='$phone',place='$place',soluongphong='$soluongphong',nhahang='$nhahang',
        phonghop='$phonghop',damcuoi ='$damcuoi',massage='$massage',mota='$mota',trangthai= '$trangthai' , img = '$img' WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        if($result==true){
            return true;
        }
        else{
            return false;
        }
        mysqli_close($conn);
    }
    function updateHotelNoImg($id,$name_hotel,$phone,$place,$soluongphong,$nhahang,$phonghop,$damcuoi,$massage,$mota,$trangthai){
        $conn = connectDB();
        $sql = "UPDATE hotel_info SET name_hotel='$name_hotel',phone='$phone',place='$place',soluongphong='$soluongphong',nhahang='$nhahang',
        phonghop='$phonghop',damcuoi ='$damcuoi',massage='$massage',mota='$mota',trangthai= '$trangthai' WHERE id = $id";
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

    function searchHotel($name_hotel){
        $conn = connectDB();
        $sql = "select * from hotel_info where name_hotel = '$name_hotel'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count>=1){
            return $result;
        }
        else{
            echo 'loi tim kiem du lieu tu bang hotel_info'; 
        }
        mysqli_close($conn);
    }
?>