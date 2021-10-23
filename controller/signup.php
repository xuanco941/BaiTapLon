<?php
    // Dang ki tai khoan
    include '../modal/connectDB.php';
    include '../send-email/sendEmail.php';

    // Kiem tra neu ton tai email , password duoc gui len thi se kiem tra trong db
    // Trong db neu chua co gmail nay thi them vao voi status = false , gui email xac nhap nguoi dung , nuoi dung xac nhan status = true

    if(isset($_POST['gmail']) && isset($_POST['password'])){
        $gmail = $_POST['gmail'];
        $password = $_POST['password'];

        $conn = connectDB();       
        $sql = "select * from user where gmail = '$gmail'";

        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count <= 0){
            $status = false;
            // Ma hoa mat khau truoc khi luu len db
            $password_hash = password_hash($password,PASSWORD_DEFAULT);
            
            // Tao 1 code de lam link kich hoat tai khoan
            $key = (string)rand(0,1000);

            $code = password_hash($key,PASSWORD_DEFAULT);

            //tao 1 tai khoan voi status = false , code de kich hoat duoc ma hoa , key luu tren db , code gui ve client
            $sql2 = "insert into user (gmail,password,status,code) values ('$gmail','$password_hash','$status','$key')";
            $result = mysqli_query($conn,$sql2);
            //gui email kich hoat cho client
            if($result==true){
                $title = '[Kích hoạt tài khoản]';
                $bodyContent = "<a 
                style='height:100px;padding:10px;background-color:darkgreen;font-size:20px;color:white;margin:0 auto'
                href = 'http://localhost/Bai-Tap-Lon/controller/authentication.php/?gmail=$gmail&code=$code' >
                Click vào đây để xác nhận tài khoản $gmail của bạn</a>";

                sendEmail($gmail,$title,$bodyContent);
                header('Location: ../views/signin.php');
            }
            else{
                echo 'Dang ky khong thanh cong';
            }
        }
        else{
            echo 'Email da ton tai';
        }
        mysqli_close($conn);
    }
?>