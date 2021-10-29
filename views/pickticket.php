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



     <nav>
         <div class="container">
             <div class="text-center my-4">
                 <h2>Dat phong
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
                                 <a class="btn btn-primary" href="../controller/updateticket.php?id_sp=<?php echo $row ?>" role="button">đặt phòng</a>
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
    <!-- chỗ này để tiến hành insert thông tin vé vào bảng ticket với thông tin người dùng chọn,
    ở đây sẽ có 1 vài thông tin có sẵn cua khách sạn như tên khách sạn , thông tin gmail của người dùng không phải nhập ,
    mấy thông tin này lấy từ GET[id_hotel] (được truyền từ trang detail) và SESSION[signinSuccess] (gmail) ,
    sau khi ấn đặt vé ở đây thì thêm vào bảng ticket và gửi email cái thông tin vé vừa đặt cho họ 
 -->






    <?php
        include './partials/footer.php'
    ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>