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
    <title>Đặt vé</title>
</head>
<body>

    <?php
        include './partials/header.php';
    ?>


    
    chỗ này để tiến hành insert thông tin vé vào bảng ticket với thông tin người dùng chọn,
    ở đây sẽ có 1 vài thông tin có sẵn cua khách sạn như tên khách sạn , thông tin gmail của người dùng không phải nhập ,
    mấy thông tin này lấy từ GET[id_hotel] (được truyền từ trang detail) và SESSION[signinSuccess] (gmail) ,
    sau khi ấn đặt vé ở đây thì thêm vào bảng ticket và gửi email cái thông tin vé vừa đặt cho họ 







    <?php
        include './partials/footer.php'
    ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>