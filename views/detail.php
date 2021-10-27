<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Chi tiết khách sạn</title>
</head>

<body>

    <?php include './partials/header.php' ?>

    <div class="container-fluid" style="padding: 0 3%; margin-bottom: 160px; margin-top: 30px">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5" style="padding: 20px 20px 20px 0; border-right: #adb5bd solid 1px;">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="height: 488px;" src="https://jackierealtor.vn/wp-content/uploads/2019/12/Stunning-beautiful-villa-for-rent-in-Vinhomes-Riverside-Long-Bien-District-Hanoi-20-1200x900.jpg?v=1595324778" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 488px;" src="https://jackierealtor.vn/wp-content/uploads/2019/12/Stunning-beautiful-villa-for-rent-in-Vinhomes-Riverside-Long-Bien-District-Hanoi-21-1200x900.jpg?v=1595324782" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 488px;" src="https://jackierealtor.vn/wp-content/uploads/2019/12/Stunning-beautiful-villa-for-rent-in-Vinhomes-Riverside-Long-Bien-District-Hanoi-12-1200x900.jpg?v=1595324746" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-7" style="padding: 20px 0 0 20px;">
                <table class="table table-striped">
                    <tbody>


                        <?php

                        #Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                        #B1 kết nối với CSDL
                        $conn = mysqli_connect('localhost', 'root', '', 'hotel');
                        mysqli_set_charset($conn, "utf8"); //Định dang font chữ 
                        if (!$conn) {
                            die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                        }
                        #Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
                        $sql = "SELECT hf.name_hotel, hf.phone, hf.place, hf.soluongphong, hf.nhahang, hf.phonghop, hf.damcuoi, hf.massage, hf.mota, hf.trangthai  FROM hotel_info hf";
                        $result = mysqli_query($conn, $sql);
                        #Bước 3: Xử lí kết quả trả về
                        if (mysqli_num_rows($result) > 0) {
                            $i = 1;
                            $boolToString = true ? 'Sẵn sàng phục vụ' : 'Đang cập nhật';

                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1.25rem; color: #ffc107"> <i class="fas fa-synagogue"></i> Khách sạn: </th>
                                    <td class="col-sm-9 col-md-9 col-lg-9" style="font-size: 1.25rem;">
                                        <?php echo $row['name_hotel']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-phone"></i> Số điện thoại liên hệ: </th>
                                    <td class="col-sm-9 col-md-9 col-lg-9"><?php echo $row['phone']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-map-marked-alt"></i> Địa điểm: </th>
                                    <td class="col-sm-9 col-md-9 col-lg-9"><?php echo $row['place']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fad fa-house-flood"></i> Số lượng phòng: </th>
                                    <td class="col-sm-9 col-md-9 col-lg-9"><?php echo $row['soluongphong']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1.25rem; color: #ffc107"> <i class="fas fa-server"></i> Dịch vụ: </th>
                                    <td class="col-sm-9 col-md-9 col-lg-9">
                                </tr>
                                <tr>
                                    <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-turkey"></i> Nhà hàng: </th>
                                    <td class="col-sm-9 col-md-9 col-lg-9">
                                        <?php echo $row['nhahang'] ? 'Sẵn sàng phục vụ' : 'Đang cập nhật'; ?>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="far fa-handshake"></i> Phòng họp: </th>
                                    <td class="col-sm-9 col-md-9 col-lg-9">
                                    <?php echo $row['phonghop'] ? 'Sẵn sàng phục vụ' : 'Đang cập nhật'; ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="far fa-rings-wedding"></i> Đám cưới: </th>
                                    <td class="col-sm-9 col-md-9 col-lg-9">
                                    <?php echo $row['damcuoi'] ? 'Sẵn sàng phục vụ' : 'Đang cập nhật'; ?>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fad fa-spa"></i></i> Massage: </th>
                                    <td class="col-sm-9 col-md-9 col-lg-9">
                                    <?php echo $row['massage'] ? 'Sẵn sàng phục vụ' : 'Đang cập nhật'; ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1.25rem; color: #ffc107"> <i class="fas fa-envelope-open-text"></i> Mô tả: </th>
                                    <td class="col-sm-9 col-md-9 col-lg-9" style="font-size: 1.2rem;"><?php echo $row['mota']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1.25rem; color: #ffc107"> <i class="far fa-calendar-check"></i> Trạng thái: </th>
                                    <td class="col-sm-9 col-md-9 col-lg-9" style="font-size: 1.2rem;">
                                    <?php echo $row['massage'] ? 'Đang hoạt động cùng nhiều ưu đãi' : 'Đang tạm dừng hoạt động'; ?>
                                </td>
                                </tr>

                        <?php
                            }
                        }

                        ?>
                    </tbody>
                </table>
                <div class="col-sm-3 col-md-3">
                    <a class="btn btn-primary" href="pickticket.php" role="button">Đặt phòng</a>
                </div>
            </div>


        </div>
    </div>

    <?php include './partials/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>