<?php
session_start();
if (!isset($_SESSION['loginSuccess'])) {
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
    <title>Vé đặt</title>
</head>

<body>

    <?php
    include './partials/header.php';
    ?>




    <!-- code ở đây , chỗ này để cho người dùng biết họ đã đặt những vé gì , thông tin vé đã được đặt
    dựa vào session[signinSuccess] và gmail của người đặt vé trong bảng ticket -->


    <div class="container">
        <h3 class="text-center" style="color: #fff!important;padding: 10px; font-size:2.5rem; background: cadetblue;">Vé đã đặt </h3>

        <table class="table" style="text-align: center;">
            <thead>
                <tr style="color: white;">
                    <th scope="col">#</th>
                    <th scope="col">Khách sạn</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">Ngày kết thúc</th>
                    <th scope="col">Chi phí</th>
                    <th scope="col">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../model/hotel.php';
                $conn = mysqli_connect('localhost', 'root', '', 'hotel');
                mysqli_set_charset($conn, "utf8"); //Định dang font chữ 
                if (!$conn) {
                    die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                }
                $gmail = $_SESSION['loginSuccess'];

                

                $sql = "SELECT * FROM ticket WHERE id_user = (SELECT id FROM user WHERE gmail = '$gmail')";
                $result = mysqli_query($conn, $sql);
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                  $row['trangthai'] == 1 ? $trangthai = 'Đã đặt thành công' : $trangthai = 'Đang chờ';
                ?>

                    <tr style="color: white;">
                        <th scope="row"><?php echo $i; ?></th>
                        <td style="font-size: 1.2rem;"><?php echo $row['hotel_name']; ?></td>
                        <td style="font-size: 1.2rem;"><?php echo $row['ngaydat']; ?></td>
                        <td style="font-size: 1.2rem;"><?php echo $row['ngayketthuc']; ?></td>
                        <td style="font-size: 1.2rem;"><?php echo $row['chiphi'] . '$'; ?></td>
                        <td style="font-size: 1.2rem;"><?php echo $trangthai; ?></td>
                    </tr>
                <?php
                    $i++;
                }

                ?>

            </tbody>
        </table>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>