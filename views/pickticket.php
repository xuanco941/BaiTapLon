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
    <style>
        tr,
        th,
        td {
            color: white;
        }
    </style>
    <title>Đặt vé</title>
</head>

<body>
    <!-- chỗ này để tiến hành insert thông tin vé vào bảng ticket với thông tin người dùng chọn,
    ở đây sẽ có 1 vài thông tin có sẵn cua khách sạn như tên khách sạn , thông tin gmail của người dùng không phải nhập ,
    mấy thông tin này lấy từ GET[id_hotel] (được truyền từ trang detail) và SESSION[signinSuccess] (gmail) ,
    sau khi ấn đặt vé ở đây thì thêm vào bảng ticket và gửi email cái thông tin vé vừa đặt cho họ 
 -->
    <?php
    include './partials/header.php';
    ?>

    <?php
    include '../model/hotel.php';
    $conn = connectDB();
    $gmail = $_SESSION['loginSuccess'];
    $sql_2 = "select id from `user` where gmail = '$gmail'";
    $result_2 = mysqli_query($conn, $sql_2);
    $row2 = mysqli_fetch_assoc($result_2);
    $id_user = $row2['id'];




    //Nếu không có id sản phẩm được truyền trên url thì sẽ 
    if (isset($_GET['id'])) {
        $id_hotel = $_GET['id'];
        $sql = "SELECT * FROM `hotel_info` WHERE id = $id_hotel ";
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $row = mysqli_fetch_assoc($result);
                $nameHotel = $row['name_hotel'];
                $phoneHotel = $row['phone'];
                $place = $row['place'];
                $soluongphong = $row['soluongphong'];
                $nhahang = $row['nhahang'];
                $phonghop = $row['phonghop'];
                $damcuoi = $row['damcuoi'];
                $massage = $row['massage'];
                $mota = $row['mota'];
                $trangthai = $row['trangthai'];
                $img_name = $row['img'];
                $img = "../uploads/$img_name";
            } else {
                header("Location: error.php");
            }
        }
    } else {
        $nameHotel = 'Bạn chưa chọn khách sạn';
        $phoneHotel = 'Bạn chưa chọn khách sạn';
        $place = 'Bạn chưa chọn khách sạn';
        $soluongphong = 'Bạn chưa chọn khách sạn';
        $nhahang = 0;
        $phonghop = 0;
        $damcuoi = 0;
        $massage = 0;
        $mota = 'Bạn chưa chọn khách sạn';
        $trangthai = 0;
        $img = "../assets/img/noimg.jpg";
    }


    ?>

    <nav>
        <div class="container">
            <div class="text-center my-4">
                <h1 style="color: white; font-style:italic">Điền nội dung vé
                </h1>
            </div>
            <div class="row" style="color:white;">

                <div class="col-xs-12 col-sm-7">
                    <h3 class="h2 subtitle sub_booking" style="background-color: #86b817!important;color: #fff!important;padding: 10px;">Thông tin liên hệ</h3>
                    <div class="fieldcontain">
                        <form method="post" id="form_ticket" action="../controller/insertTicket.php">
                            <div class="form-group row my-4">
                                <label class="col-sm-2 col-form-label">Họ và Tên</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tenkhach" name="tenkhach">
                                </div>
                            </div>
                            <div class="form-group row my-4">
                                <label class="col-sm-2 col-form-label">Gmail </label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control" id="gmail" name="gmail" value=<?php echo $gmail  ?>>
                                </div>
                            </div>

                            <div class="form-group row my-4">
                                <label for="name_hotel" class="col-sm-2 col-form-label">Khách sạn </label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="name_hotel" name="name_hotel" aria-label="Khách sạn">
                                        <?php
                                        if (isset($_GET['id'])) {
                                            echo "<option class='name_hotel_item' selected value=$nameHotel>$nameHotel</option>";
                                        }
                                        ?>

                                        <?php
                                        $sql_name_hotel = "select name_hotel from hotel_info";
                                        $exec = mysqli_query($conn, $sql_name_hotel);
                                        while ($name_hotels = mysqli_fetch_array($exec, MYSQLI_NUM)) {
                                            echo "<option class='name_hotel_item' value='$name_hotels[0]'>$name_hotels[0]</option>";
                                        }
                                        ?>


                                    </select>
                                </div>


                            </div>
                            <div class="form-group row my-4">
                                <label class="col-sm-2 col-form-label">Ngày đặt</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="ngaydat" name="ngaydat" value="2021-11-04">
                                </div>
                            </div>
                            <div class="form-group row my-4">
                                <label class="col-sm-2 col-form-label">Ngày kết thúc</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control " id="ngayketthuc" name="ngayketthuc" value="2021-11-04">
                                </div>
                            </div>
                            <div class="form-group row my-4">
                                <label class="col-sm-2 col-form-label">Ghi chú</label>
                                <div class="col-sm-10">
                                    <textarea style="resize: none;" id="yeucau" name="yeucau" class="form-control txtContactNotes" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row my-4">
                                <label class="col-sm-2 col-form-label">Chi phí ($)</label>
                                <div class="col-sm-10">
                                    <input id="chiphi" placeholder="20$ 1 ngày" name="chiphi" type="number" readonly class="form-control txtContactNotes">
                                </div>
                                <input type="number" name="id_user" style="display: none;" readonly value="<?php echo $id_user; ?>">
                                <input type="number" name="trangthai" style="display :none;" readonly value='1'>
                                <input type="number" id="id_hotel_ajax" name="id_hotel" style="display: none;" readonly value="<?php echo $id_hotel; ?>">

                            </div>
                            <div class="form-group row my-4">
                                <input class="col-sm-2 my-2" type="checkbox" checked='true' class="custom-control-input" id="customControlAutosizing">
                                <label for="" class="col-sm-10">Tôi đã đọc và chấp nhận các chính sách,điều khoản của khách sạn</label>
                            </div>
                            <div class="form-group row my-4">
                                <button type="submit" id="btn-submit" class="btn btn-dark">Đặt</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5">
                    <h3 class="h2 subtitle sub_booking" style="background-color: #86b817!important;color: #fff!important;padding: 10px;">Thông tin phòng</h3>
                    <img id="img_hotel_ajax" class="col-sm-12 my-2 img-fluid" src="<?php echo $img; ?>" alt="img hotel">
                    <div class="col-xs-12" style="padding: 20px 0 0 20px;">
                        <table class="table table-striped">
                            <tbody>
                                <?php
                                echo '<tr>';
                                echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1.3rem; color: #ffc107"> <i class="fas fa-synagogue"></i> Khách sạn: </th>';
                                echo '<td class="col-sm-9 col-md-9 col-lg-9" id="name_hotel_ajax" style="font-size: 1.5rem;color:wheat;">' . $nameHotel . '.</td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-phone"></i> Số điện thoại liên hệ: </th>';
                                echo '<td class="col-sm-9 col-md-9 col-lg-9" id="phone_hotel_ajax">' . $phoneHotel . '</td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-map-marked-alt"></i> Địa điểm: </th>';
                                echo '<td class="col-sm-9 col-md-9 col-lg-9" id="place_hotel_ajax">' . $place . '</td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fad fa-house-flood"></i> Số lượng phòng: </th>';
                                echo '<td class="col-sm-9 col-md-9 col-lg-9" id="soluongphong_hotel_ajax">' . $soluongphong . '</td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3" style="font-size: 1.3rem; color: #ffc107"> <i class="fas fa-server"></i> Dịch vụ: </th>';
                                echo '<td class="col-sm-9 col-md-9 col-lg-9"></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-turkey"></i> Nhà hàng: </th>';
                                if ($nhahang == 1) {
                                    echo '<td class="col-sm-9 col-md-9 col-lg-9" id="nhahang_hotel_ajax">Có</td>';
                                } else {
                                    echo '<td class="col-sm-9 col-md-9 col-lg-9" id="nhahang_hotel_ajax">Không</td>';
                                }
                                echo '</tr>';
                                echo '<tr>';
                                echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="far fa-handshake"></i> Phòng họp: </th>';
                                if ($phonghop == 1) {
                                    echo '<td class="col-sm-9 col-md-9 col-lg-9" id="phonghop_hotel_ajax">Có</td>';
                                } else {
                                    echo '<td class="col-sm-9 col-md-9 col-lg-9" id="phonghop_hotel_ajax">Không</td>';
                                }
                                echo '</tr>';
                                echo '<tr>';
                                echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="far fa-rings-wedding"></i> Đám cưới: </th>';
                                if ($damcuoi == 1) {
                                    echo '<td class="col-sm-9 col-md-9 col-lg-9" id="damcuoi_hotel_ajax">Có</td>';
                                } else {
                                    echo '<td class="col-sm-9 col-md-9 col-lg-9" id="damcuoi_hotel_ajax">Không</td>';
                                }
                                echo '</tr>';
                                echo '<tr>';
                                echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3" > <i class="fad fa-spa"></i> Massage: </th>';
                                if ($massage == 1) {
                                    echo '<td class="col-sm-9 col-md-9 col-lg-9" id="massage_hotel_ajax">Có</td>';
                                } else {
                                    echo '<td class="col-sm-9 col-md-9 col-lg-9" id="massage_hotel_ajax">Không</td>';
                                }

                                echo '</tr>';
                                echo '<tr>';
                                echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="fas fa-envelope-open-text"></i> Mô tả: </th>';
                                echo '<td class="col-sm-9 col-md-9 col-lg-9" id="mota_hotel_ajax">' . $mota . '</td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<th scope="row" class="col-sm-3 col-md-3 col-lg-3"> <i class="far fa-calendar-check"></i> Trạng thái: </th>';
                                if ($trangthai == 1) {
                                    echo '<td class="col-sm-9 col-md-9 col-lg-9" id="trangthai_hotel_ajax">Đang hoạt động</td>';
                                } else {
                                    echo '<td class="col-sm-9 col-md-9 col-lg-9" id="trangthai_hotel_ajax">Ngừng hoạt động</td>';
                                }
                                echo '</tr>';
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </nav>

    <?php
    include './partials/footer.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.10.7/dayjs.min.js"></script>



    <script src="../assets/js/ajaxPickTicket.js"></script>
</body>

</html>