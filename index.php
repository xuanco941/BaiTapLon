<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/styleUserHome.css">
  <title>hotel online booking</title>
</head>


<body>

  <nav class="navbar navbar-expand-md navbar-light sticky-top " style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-branch" href="#">
        <img src="assets/img/mau-logo-khach-san-dep-1.png" height="50">
      </a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Make a reservation</a>
          </li>

        </ul>

        <ul class="navbar-nav ms-auto">
          <li>
            <form action="./controller/searchHotel.php" method="GET" class="input-group">
              <input type="text" class="form-control" placeholder="Nhập tên khách sạn" aria-label="search" name="hotel_name">
              <a class="btn btn-primary" href="#" role="button"><button style="color: inherit; background-color:inherit; border:none;" type="submit">Tìm kiếm</button></a>
            </form>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-info" href="#" role="button"><i class="fas fa-cart-plus"></i>Vé đặt</a>
            <a style="color: white;" class="btn btn-success" href="./views/signin.php" role="button">Đăng nhập</a>
            <a style="color: white;" class="btn btn-primary" href="./views/signup.php" role="button">Đăng ký</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  <nav>
    <div class="container-fluid">
      <div class="text-center my-4">
        <h2>Khách sạn SeaHotel
        </h2>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/a.jpg" style="width:100%; height:450px;" alt="...">

          </div>
          <div class="carousel-item">
            <img src="assets/img/b.jpg" style="width:100%; height:450px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/c.jpg" style="width:100%; height:450px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/f.jpeg" style="width:100%; height:450px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/e.jpg" style="width:100%; height:450px;" alt="...">
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
      <div class="col-4">
        <div class="card ">
          <img class="card-img-top" src="assets/img/phonghop1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Phòng họp</h5>
            <p class="card-text">Phòng họp theo phong cách hiện đại với đầy đủ tiện nghi</p>
            <a href="#" class="btn btn-warning">Xem chi tiết</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" >
          <img class="card-img-top" src="assets/img/d.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Phòng ngủ</h5>
            <p class="card-text">Được các kỹ sư Italy thiết kế theo phong cách Châu âu với tiêu chuẩn 5 sao</p>
            <a href="#" class="btn btn-warning">Xem chi tiết</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card ">
          <img class="card-img-top" src="assets/img/damcuoi.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Sảng tiệc đám cưới</h5>
            <p class="card-text">Sở hữu hội trường rộng 200m2 với sức chứa tối đa lên tới 180 người. </p>
            <a href="#" class="btn btn-warning">Xem chi tiết</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card ">
          <img class="card-img-top" src="./assets/img/e.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Sảng tiệc đám cưới</h5>
            <p class="card-text">Sở hữu hội trường rộng 200m2 với sức chứa tối đa lên tới 180 người. </p>
            <a href="#" class="btn btn-warning">Xem chi tiết</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card ">
          <img class="card-img-top" src="./assets/img/e.jpg "alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Sảng tiệc đám cưới</h5>
            <p class="card-text">Sở hữu hội trường rộng 200m2 với sức chứa tối đa lên tới 180 người. </p>
            <a href="#" class="btn btn-warning">Xem chi tiết</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <nav aria-label="Page navigation example ">
  <ul class="pagination  justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>

  <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3" style="background-color: #e3f2fd;">
      © 2021 Copyright:
      <a class="text-info" href="#">TLU</a>
    </div>
  </footer>

  <!-- end carousel -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>