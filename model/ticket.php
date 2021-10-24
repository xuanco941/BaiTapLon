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

    function selectAllTicket(){
        $conn = connectDB();
        $sql = 'select * from ticket';
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count>=1){
            return $result;
        }
        else{
            echo 'loi lay du lieu tu bang ticket'; 
        }
        mysqli_close($conn);
    }


    function insertTicket($tenkhach,$gmail,$hotel_name,$ngaydat,$ngayketthuc,$yeucau,$chiphi,$trangthai){
        $conn = connectDB();
        $sql = "INSERT INTO `ticket`(`tenkhach`, `gmail`, `hotel_name`, `ngaydat`, `ngayketthuc`, `yeucau`, `chiphi`, `trangthai`) 
        VALUES ('$tenkhach','$gmail','$hotel_name','$ngaydat','$ngayketthuc','$yeucau',$chiphi,$trangthai)";
        $result = mysqli_query($conn,$sql);
        if($result==true){
            return true;
        }
        else{
            return false;
        }
        mysqli_close($conn);
    }

    function updateTicket($id,$tenkhach,$gmail,$hotel_name,$ngaydat,$ngayketthuc,$yeucau,$chiphi,$trangthai){
        $conn = connectDB();
        $sql = "UPDATE `ticket` SET `tenkhach`='$tenkhach',`gmail`='$gmail',`hotel_name`='$hotel_name',`ngaydat`='$ngaydat',`ngayketthuc`='$ngayketthuc',
        `yeucau`='$yeucau',`chiphi`=$chiphi,`trangthai`= $trangthai WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        if($result==true){
            return true;
        }
        else{
            return false;
        }
        mysqli_close($conn);
    }

    function deleteTicket($id){
        $conn = connectDB();
        $sql = "DELETE FROM `ticket` WHERE id=$id";
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