<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./assets/img/icon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/styleUserHome.css">
  <title>Dịch vụ đặt khách sạn trực tuyến</title>
</head>


<body>

  <nav id="navbar-pc" class="navbar navbar-expand-md navbar-light sticky-top " style="background-color: #e3f2fd;">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item item-head">
            <a id="trangchu" class="nav-link " href="index.php">Trang chủ</a>
          </li>
          <li class="nav-item item-head">
            <a id="datvenhanh" class="nav-link" href="./views/pickticket.php">Đặt vé nhanh</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li>
            <form action="./views/search.php" method="GET" class="input-group search_mb">
              <input type="text" class="form-control" placeholder="Nhập tên khách sạn" aria-label="search" name="name_hotel">
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
        <li><a href="./views/pickticket.php" class="dropdown-link"><button class="dropdown-item" type="button">Đặt vé nhanh</button></a></li>
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
    <a style="font-size:20px ; text-decoration: none; color: black; position:absolute; top:0; right:0; margin-top:8px;" href="./index.php"><button style="width:148px;" class="btn btn-secondary">Trang chủ</button></a>
  </nav>

  <nav>
    <div class="container-fluid">
      <div class="text-center slogan">
        <h2 style="width:100%">Dịch vụ đặt vé khách sạn</h2>
        <br/>
        <h4 style="width:100%">Nhanh chóng, tiện lợi số 1 Châu Phi
        </h4>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/a.jpg" style="width:100%; height:530px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/b.jpg" style="width:100%; height:530px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/c.jpg" style="width:100%; height:530px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/f.jpeg" style="width:100%; height:530px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/e.jpg" style="width:100%; height:530px;" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </nav>


  <div class="container">

    <div class="card-group my-4 row">

      <?php
      // phan trang + render
      include './model/hotel.php';
      include './controller/pagination.php';
      $itemSelect = 9;
      $countPage = countPageHotel($itemSelect);

      $page = 1;
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
      }
      $start = ($itemSelect * ($page - 1));
      // $end = $itemSelect * $page;

      $sqlSelectLimit = "select * from hotel_info limit $start , $itemSelect";
      $conn = connectDB();

      $result = mysqli_query($conn, $sqlSelectLimit);

      while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        $img = '';
        if ($row[11]) {
          $img = '<img class="card-img-top" src="./uploads/' . $row[11] . '" alt="Card image cap" width=100% height: 300px>';
        } else {
          $img = '<img src="./assets/img/noimg.jpg" alt="khong co img" class="card-img-top" width=100% height: 300px/>';
        }
        echo '
        
        <div class="box-ctent col-sm-4">
        <a class="elm-link" href="./views/detail.php?product=' . $row[0] . '">
        <div class="card " style="height: 100%">
          ' . $img . '
          <div class="card-body">
            <h5 class="card-title">' . $row[1] . '</h5>
            <p class="card-text">' . $row[9] . '</p>
            <a href="./views/detail.php?product=' . $row[0] . '" class="btn btn-warning">Xem chi tiết</a>
          </div>
        </div>
        </a>
      </div>
        ';
      }
      ?>

    </div>
  </div>


  <nav class="box-page" style="margin-top: 80px;" aria-label="...">
    <ul class="pagination pagination-lg">

      <?php
      for ($i = 1; $i <= $countPage; $i++) {

        if (isset($_GET['page']) && $i == $_GET['page']) {
          echo "<li class='page-item disabled'><a class='page-link' href='./index.php?page=$i'>$i</a></li>";
        } else {
          echo "<li class='page-item'><a class='page-link' href='./index.php?page=$i'>$i</a></li>";
        }
      }
      if (isset($conn)) {
        mysqli_close($conn);
      }
      ?>

    </ul>


  </nav>

  <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3" style="background-color: #e3f2fd;">
      © 2021 Copyright:
      <a href="https://github.com/xuanco941/BaiTapLon" target="blank">Xuân-Tuấn-Tú</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>