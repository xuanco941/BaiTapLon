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
                // check status , neu false thi bat xac thuc , neu true thi chuyen vao home
                $sql2 = "select status , code from user where gmail = '$gmail'";
                $result2 = mysqli_query($conn,$sql2);
                $row2 = mysqli_fetch_array($result2,MYSQLI_NUM);
                $status = $row2[0];
                $code = password_hash($row2[1],PASSWORD_DEFAULT);
                if($status==true){
                    header('Location: ../views/home.php');
                }
                else{
                    $title = '[Kích hoạt tài khoản]';
                    $bodyContent = "<a 
                    style='height:100px;padding:10px;background-color:darkgreen;font-size:20px;color:white;margin:0 auto'
                    href = 'http://localhost/Bai-Tap-Lon/controller/authentication.php/?gmail=$gmail&code=$code' >
                    Click vào đây để xác nhận tài khoản $gmail của bạn</a>";

                    sendEmail($gmail,$title,$bodyContent);
                    header('Location: ../views/signin.php');
                }
            }
            else{
                echo 'Sai mat khau';
            }
        }
        else{
            echo 'Email khong ton tai';
        }
        mysqli_close($conn);
    }
?>