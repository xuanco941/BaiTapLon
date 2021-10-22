<?php
    include '../modal/connectDB.php';
    include '../send-email/sendEmail.php';

    if(isset($_POST['gmail']) && isset($_POST['password'])){
        $gmail = $_POST['gmail'];
        $password = $_POST['password'];

        $conn = connectDB();       
        $sql = "select password from user where gmail = '$gmail'";

        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            // Lay mat khau ma hoa tren db ve so sanh voi du lieu nguoi dung nhap
            $row = mysqli_fetch_array($result,MYSQLI_NUM);
            $password_hash = $row[0];
            if(password_verify($password,$password_hash)){
                header('Location: ../views/home.php');
            }
            else{
                echo 'Sai mat mat';
            }
        }
        else{
            echo 'Email khong ton tai';
        }
        mysqli_close($conn);
    }
?>