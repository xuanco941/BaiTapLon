<?php
    if($_POST['data'])
    {
        $name_hotel = $_POST['data'];
        $conn = mysqli_connect('localhost','root','','hotel');
        if(!$conn){
            die('Khong the ket noi toi Database');
        }
        $sql = "select * from hotel_info where name_hotel = '$name_hotel'";

        $result = mysqli_query($conn,$sql); 
        
        while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
            $arr = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11]);
        }
       
        echo json_encode($arr);
        mysqli_close($conn);

    }
    

     // $arr = [];

        // while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
        //     $obj->id = $row[0];
        //     $obj->name_hotel = $row[1];
        //     $obj->phone = $row[2];
        //     $obj->place = $row[3];
        //     $obj->soluongphong = $row[4];
        //     $obj->nhahang = $row[5];
        //     $obj->phonghop = $row[6];
        //     $obj->damcuoi = $row[7];
        //     $obj->massage = $row[8];
        //     $obj->mota = $row[9];
        //     $obj->trangthai = $row[10];
        //     $obj->img = $row[11];
        //     $arr = array($obj);
        // }
        // echo $arr;




?>