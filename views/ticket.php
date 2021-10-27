<?php
session_start();
if(!isset($_SESSION['loginSuccess'])){
    header('Location: ./signin.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css1/styleUserHome.css">
    <title>Đặt phòng</title>
</head>

<body>
    <nav id="navbar-pc" class="navbar navbar-expand-md navbar-light sticky-top " style="background-color: #e3f2fd;">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item item-head">
                        <a class="nav-link active" href="../index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item item-head">
                        <a class="nav-link" href="./views/ticket.php">Đặt vé nhanh</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li>
                        <form action="./controller/searchHotel.php" method="GET" class="input-group">
                            <input type="text" class="form-control" placeholder="Nhập tên khách sạn" aria-label="search" name="hotel_name" required>
                            <a class="btn btn-primary" href="#" role="button"><button style="color: inherit; background-color:inherit; border:none;" type="submit">Tìm kiếm</button></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="./views/ticket.php" class="btn btn-info" style="color: blue;" href="#" role="button"><i class="fas fa-cart-plus"></i>Vé đặt</a>
                        <?php
                        if (!isset($_SESSION['loginSuccess'])) {
                            echo '
                <a style="color: white;" class="btn btn-success" href="./views/signin.php" role="button">Đăng nhập</a>
                <a style="color: white;" class="btn btn-primary" href="./views/signup.php" role="button">Đăng ký</a>
                ';
                        } else {
                            echo '<a style="color: white;" class="btn btn-danger" href="./controller/signout.php" role="button">Đăng xuất</a>';
                        }
                        ?>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <nav id="navbar-mb" class="navbar navbar-expand-md navbar-light sticky-top " style="background-color: #e3f2fd;">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><button class="dropdown-item" type="button">Đặt vé nhanh</button></li>
                <li><a class="dropdown-link" href="./views/ticket.php"><button class="dropdown-item" type="button">Vé đặt</button></a></li>
                <li><a class="dropdown-link" href="./views/search.php"><button class="dropdown-item" type="button">Tìm kiếm</button></a></li>
                <?php
                if (!isset($_SESSION['loginSuccess'])) {
                    echo '
          <li  ><a class="dropdown-link" href="./views/signin.php" ><button class="dropdown-item" type="button">Đăng nhập</button></a></li>
          <li  ><a class="dropdown-link" href="./views/signup.php"><button class="dropdown-item" type="button">Đăng ký</button></a></li>
                ';
                } else {
                    echo '<li  ><a class="dropdown-link" href=./controller/signout.php><button class="dropdown-item" type="button">Đăng xuất</button></a></li>';
                }
                ?>

            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        
        <main>

            <table class="table my-4">
                <thead>
                    <tr>
                        <th scope="col">Tên khách</th>
                        <th scope="col">Gmail</th>
                        <th scope="col">Tên khách sạn</th>
                        <th scope="col">Ngày đặt</th>
                        <th scope="col">Ngày kết thúc</th>
                        <th scope="col">yêu cầu</th>
                        <th scope="col">Chi phí</th>
                        <th scope="col">image</th>


                    </tr>
                </thead>
                <tbody>

                    <?php

                    include '../model/connectDB.php';

                    $sql = "SELECT * FROM `ticket` where id = $id";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<th scope="row">' . $row['id'] . '</th>';
                            echo '<td>' . $row['tenkhach'] . '</td>';
                            echo '<td>' . $row['gmail'] . '</td>';
                            echo '<td>' . $row['hotel_name'] . '</td>';
                            echo '<td>' . $row['ngaydat'] . '</td>';
                            echo '<td>' . $row['ngayketthuc'] . '</td>';
                            echo '<td>' . $row['yeucau'] . '</td>';
                            echo '<td>' . $row['chiphi'] . '</td>';

                            echo '</tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>
        </main>
    </div>

</body>

</html>