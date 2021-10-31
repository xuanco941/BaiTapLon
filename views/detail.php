<?php
    session_start();
?>
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

    <?php
    // Chỗ này để xem chi tiết , tôi viết cái đoạn ấn xem chi tiết đi vào đây sẽ có biến GET[product] rồi , biến này là id của khách sạn 
    // nên sau khi ấn vào đặt vé ở đây sẽ gán cái id của khách sạn này vào link dẫn sang trang pickticket nhé  
    include '../model/hotel.php';
    $gmail = '';
    if (isset($_SESSION['loginSuccess'])) {
        $gmail = $_SESSION['loginSuccess'];
    }
    $id_hotel = $_GET['product'];
    $sql = "SELECT * FROM `hotel_info` WHERE id = $id_hotel ";
    $conn = connectDB();
    $result = mysqli_query($conn, $sql);
    if ($result == true) {
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $row = mysqli_fetch_assoc($result);
            $nameHotel = $row['name_hotel'];
            $phoneHotel = $row['phone'];
            $place = $row['place'];
            $soluongphong=$row['soluongphong'];
            $nhahang = $row['nhahang'];
            $phonghop = $row['damcuoi'];
            $massage = $row['massage'];
            $mota = $row['mota'];
            $status = $row['trangthai'];
            if ($row['img']) {
                $img = "../uploads/".$row['img'];
              } else {
                $img = '../assets/img/noimg.jpg';
              }
        } else {
            header("location:error.php");
        }
    }

    ?>

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
                            <img style="height: 488px;" src="<?php echo $img; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 488px;" src="<?php echo $img; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 488px;" src="<?php echo $img; ?>" class="d-block w-100" alt="...">
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
                        echo '<tr>';
                        echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1.5rem; color: #ffc107"> <i class="fas fa-synagogue"></i> Khách sạn: </th>';
                        echo '<td class="col-sm-9 col-md-9 col-lg-9" style="font-size: 1.5rem;">'.$row['name_hotel'].'.</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-phone"></i> Số điện thoại liên hệ: </th>';
                        echo '<td class="col-sm-9 col-md-9 col-lg-9">'.$row['phone'].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-map-marked-alt"></i> Địa điểm: </th>';
                        echo '<td class="col-sm-9 col-md-9 col-lg-9">'.$row['place'].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo'<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fad fa-house-flood"></i> Số lượng phòng: </th>';
                        echo'<td class="col-sm-9 col-md-9 col-lg-9">'.$row['soluongphong'].'</td>';
                        echo'</tr>';
                        echo '<tr>';
                        echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1.5rem; color: #ffc107"> <i class="fas fa-server"></i> Dịch vụ: </th>';
                        echo '<td class="col-sm-9 col-md-9 col-lg-9"></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-turkey"></i> Nhà hàng: </th>';
                        if($row['nhahang']==1){
                            echo '<td class="col-sm-9 col-md-9 col-lg-9">Có</td>';
                        }else{
                            echo '<td class="col-sm-9 col-md-9 col-lg-9">Không</td>';
                        }
                        echo '</tr>';
                        echo '<tr>';
                        echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="far fa-handshake"></i> Phòng họp: </th>';
                        if($row['phonghop']==1){
                            echo '<td class="col-sm-9 col-md-9 col-lg-9">Có</td>';
                        }else{
                            echo '<td class="col-sm-9 col-md-9 col-lg-9">Không</td>';
                        }
                        echo '</tr>';
                        echo '<tr>';
                        echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="far fa-rings-wedding"></i> Đám cưới: </th>';
                        if($row['phonghop']==1){
                            echo '<td class="col-sm-9 col-md-9 col-lg-9">Có</td>';
                        }else{
                            echo '<td class="col-sm-9 col-md-9 col-lg-9">Không</td>';
                        }
                        echo '</tr>';
                        echo '<tr>';
                        echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3" > <i class="fad fa-spa"></i> Massage: </th>';
                        if($row['massage']==1){
                            echo '<td class="col-sm-9 col-md-9 col-lg-9">Có</td>';
                        }else{
                            echo '<td class="col-sm-9 col-md-9 col-lg-9">Không</td>';
                        }
                        
                        echo '</tr>';
                        echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1.5rem; color: #ffc107"> <i class="fas fa-server"></i> Thông tin: </th>';

                        echo '<tr>';
                        echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-envelope-open-text"></i> Mô tả: </th>';
                        echo '<td class="col-sm-9 col-md-9 col-lg-9">'.$row['mota'].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="far fa-calendar-check"></i> Trạng thái: </th>';
                        if($row['trangthai']==1){
                            echo '<td class="col-sm-9 col-md-9 col-lg-9">Đang hoạt động</td>';
                        }else{
                            echo '<td class="col-sm-9 col-md-9 col-lg-9">Ngừng hoạt động</td>';
                        }
                        echo '</tr>';
                        ?>
                    </tbody>
                </table>
                <?php
                echo'<div class="col my-4">';
                    echo'<a class="btn btn-success" href="pickticket.php?id='.$id_hotel.'" role="button">Đặt vé khách sạn này</a>';
                echo'</div>';
                ?>
            </div>


        </div>

    </div>




    <?php include './partials/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>