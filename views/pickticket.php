 <?php
    session_start();
    if(!isset($_SESSION['loginSuccess'])){
        header('Location: ./signin.php');
    }
    ?>
 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="../assets/css/main.css">
     <link rel="stylesheet" href="../assets/css/styleUserHome.css">
     <title>Dịch vụ đặt khách sạn trực tuyến</title>
 </head>


 <body>

     <nav class="navbar navbar-expand-md navbar-light sticky-top " style="background-color: #e3f2fd;">
         <div class="container-fluid">
             <a class="navbar-branch" href="#">
                 <img src="../assets/img/mau-logo-khach-san-dep-1.png" height="50">
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

     <nav>
         <div class="container">
             <div class="text-center my-4">
                 <h2>Khách sạn SeaHotel
                 </h2>
             </div>
             <div class="row">
                 <div class="col-xs-12 col-sm-7">
                     <h3 class="h2 subtitle sub_booking" style="background-color: #86b817!important;color: #fff!important;padding: 10px;">Thông tin liên hệ</h3>
                     <div class="fieldcontain">
                         <form>
                             <div class="form-group row my-4">
                                 <label class="col-sm-2 col-form-label">Họ và Tên</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control">
                                 </div>
                             </div>
                             <div class="form-group row my-4">
                                 <label class="col-sm-2 col-form-label">Email</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control ">
                                 </div>
                             </div>
                             <div class="form-group row my-4">
                                 <label class="col-sm-2 col-form-label">Khách sạn </label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control ">
                                 </div>
                             </div>
                             <div class="form-group row my-4">
                                 <label class="col-sm-2 col-form-label">Ngày đặt</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control ">
                                 </div>
                             </div>
                             <div class="form-group row my-4">
                                 <label class="col-sm-2 col-form-label">Ngày kết thúc</label>
                                 <div class="col-sm-10">
                                     <input type="email" class="form-control ">
                                 </div>
                             </div>
                             <div class="form-group row my-4">
                                 <label class="col-sm-2 col-form-label">Ghi chú</label>
                                 <div class="col-sm-10">
                                     <textarea style="resize: none;" id="ghiChu" name="ghiChu" class="form-control txtContactNotes" rows="3"></textarea>
                                 </div>
                             </div>
                             <div class="form-group row my-4">
                                 <input class="col-sm-2 my-2" type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                 <label for="" class="col-sm-10">Tôi đã đọc và chấp nhận các chính sách,điều khoản của khách sạn</label>
                             </div>
                             <div class="form-group row my-4">
                                 <a class="btn btn-primary" href="ticket.php" role="button">đặt phòng</a>
                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-5">
                     <h3 class="h2 subtitle sub_booking" style="background-color: #86b817!important;color: #fff!important;padding: 10px;">Thông tin phòng</h3>
                     <img class="col-sm-12 my-2" width="255px" height="160px" src="../assets/img/a.jpg" alt="">
                     <div class="col-xs-12" style="padding: 20px 0 0 20px;">
                     <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1rem; color: #ffc107"> <i class="fas fa-synagogue"></i> Khách sạn </th>
                            <td class="col-sm-9 col-md-9 col-lg-9" style="font-size: 1.5rem;">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-phone"></i> hoteline </th>
                            <td class="col-sm-9 col-md-9 col-lg-9">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-map-marked-alt"></i> Địa điểm: </th>
                            <td class="col-sm-9 col-md-9 col-lg-9">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fad fa-house-flood"></i> Số lượng </th>
                            <td class="col-sm-9 col-md-9 col-lg-9">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1rem; color: #ffc107"> <i class="fas fa-server"></i> Dịch vụ: </th>
                            <td class="col-sm-9 col-md-9 col-lg-9"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-turkey"></i> Nhà hàng: </th>
                            <td class="col-sm-9 col-md-9 col-lg-9">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="far fa-handshake"></i> Phòng họp: </th>
                            <td class="col-sm-9 col-md-9 col-lg-9">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="far fa-rings-wedding"></i> Đám cưới: </th>
                            <td class="col-sm-9 col-md-9 col-lg-9">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1rem; color: #ffc107;"> <i class="fas fa-comments-alt"></i> Message </th>
                            <td class="col-sm-9 col-md-9 col-lg-9"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-envelope-open-text"></i> Mô tả: </th>
                            <td class="col-sm-9 col-md-9 col-lg-9">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="far fa-calendar-check"></i> Trạng thái: </th>
                            <td class="col-sm-9 col-md-9 col-lg-9">Mark</td>
                        </tr>
                    </tbody>
                </table>
                     </div>

                 </div>
                 


             </div>


         </div>
         </div>
     </nav>