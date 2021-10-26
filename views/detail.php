<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/styleUserHome.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Chi tiết khách sạn</title>
</head>

<body>
    <?php include './partials/header.php' ?>

    <div class="container-fluid" style="padding: 0 3%;">
        <div class="row">
            <div class="col-7" style="border-right: #adb5bd solid 1px; padding: 20px 10px 0 0;">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="col-3" style="font-size: 2rem; color: #ffc107"> <i class="fas fa-synagogue"></i> Khách sạn: </th>
                            <td class="col-7" style="font-size: 2rem;">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3"> <i class="fas fa-phone"></i> Số điện thoại liên hệ: </th>
                            <td class="col-7">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3"> <i class="fas fa-map-marked-alt"></i> Địa điểm: </th>
                            <td class="col-7">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3"> <i class="fad fa-house-flood"></i> Số lượng phòng: </th>
                            <td class="col-7">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3" style="font-size: 2rem; color: #ffc107"> <i class="fas fa-server"></i> Dịch vụ: </th>
                            <td class="col-7"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3"> <i class="fas fa-turkey"></i> Nhà hàng: </th>
                            <td class="col-7">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3"> <i class="far fa-handshake"></i> Phòng họp: </th>
                            <td class="col-7">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3"> <i class="far fa-rings-wedding"></i> Đám cưới: </th>
                            <td class="col-7">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3" style="font-size: 2rem; color: #ffc107;"> <i class="fas fa-comments-alt"></i> Message: </th>
                            <td class="col-7"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3"> <i class="fas fa-envelope-open-text"></i> Mô tả: </th>
                            <td class="col-7">Mark</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3"> <i class="far fa-calendar-check"></i> Trạng thái: </th>
                            <td class="col-7">Mark</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col" style="padding-top: 1.4%">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="height: 523px;" class="d-block w-100" src="https://jackierealtor.vn/wp-content/uploads/2019/12/Stunning-beautiful-villa-for-rent-in-Vinhomes-Riverside-Long-Bien-District-Hanoi-20-1200x900.jpg?v=1595324778" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 523px;" class="d-block w-100" src="https://jackierealtor.vn/wp-content/uploads/2019/12/Stunning-beautiful-villa-for-rent-in-Vinhomes-Riverside-Long-Bien-District-Hanoi-21-1200x900.jpg?v=1595324782" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 523px;" class="d-block w-100" src="https://jackierealtor.vn/wp-content/uploads/2019/12/Stunning-beautiful-villa-for-rent-in-Vinhomes-Riverside-Long-Bien-District-Hanoi-12-1200x900.jpg?v=1595324746" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include './partials/footer.php' ?>

</body>

</html>