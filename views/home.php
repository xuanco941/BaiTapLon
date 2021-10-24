<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styleUserHome.css">
    <title>hotel online booking</title>
</head>


<body>

    <body>
        
       <?php
       include './partials/header.php';
       ?>

        <nav>
            <div class="container-fluid">
                <div class="text-center my-4">
                    <h2>Khách sạn SeaHotel
                    </h2>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/a.jpg" style="width:100%; height:450px;" alt="...">

                        </div>
                        <div class="carousel-item">
                            <img src="image/b.jpg" style="width:100%; height:450px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/c.jpg" style="width:100%; height:450px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/f.jpeg" style="width:100%; height:450px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/e.jpg" style="width:100%; height:450px;" alt="...">
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
                        <img class="card-img-top" src="image/phonghop1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Phòng họp</h5>
                            <p class="card-text">Phòng họp theo phong cách hiện đại với đầy đủ tiện nghi</p>
                            <a href="#" class="btn btn-warning">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card ">
                        <img class="card-img-top" src="image/d.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Phòng ngủ</h5>
                            <p class="card-text">Được các kỹ sư Italy thiết kế theo phong cách Châu âu với tiêu chuẩn 5 sao</p>
                            <a href="#" class="btn btn-warning">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card ">
                        <img class="card-img-top" src="../assets/img/IMG_0388.JPG" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sảng tiệc đám cưới</h5>
                            <p class="card-text">Sở hữu hội trường rộng 200m2 với sức chứa tối đa lên tới 180 người. Cơ sở vật chất mới,sang trọgn </p>
                            <a href="#" class="btn btn-warning">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card ">
                        <img class="card-img-top" src="../assets/img/IMG_0388.JPG" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sảng tiệc đám cưới</h5>
                            <p class="card-text">Sở hữu hội trường rộng 200m2 với sức chứa tối đa lên tới 180 người. Cơ sở vật chất mới,sang trọgn </p>
                            <a href="#" class="btn btn-warning">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card ">
                        <img class="card-img-top" src="../assets/img/IMG_0388.JPG" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sảng tiệc đám cưới</h5>
                            <p class="card-text">Sở hữu hội trường rộng 200m2 với sức chứa tối đa lên tới 180 người. Cơ sở vật chất mới,sang trọgn </p>
                            <a href="#" class="btn btn-warning">Xem chi tiết</a>
                        </div>
                    </div>
                    < </div>
                </div>
            </div>
        </div>

        <?php
        include './partials/footer.php';
        ?>

        <!-- end carousel -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    </body>

</html>