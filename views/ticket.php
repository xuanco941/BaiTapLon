<?php
    session_start();
    if(!isset($_SESSION['loginSuccess'])){
        header('Location: ./signin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Lịch sử đặt vé</title>
</head>
<body>

    <?php
        include './partials/header.php';
    ?>


    

        code ở đây , chỗ này để cho người dùng biết họ đã đặt những vé gì , thông tin vé đã được đặt 
        dựa vào session[signinSuccess] và gmail của người đặt vé trong bảng ticket






    <?php
        include './partials/footer.php'
    ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>