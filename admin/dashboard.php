<?php
session_start();
if (!isset($_SESSION['signinAdmin'])) {
    header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <!-- Table -->
    <div class="head">
        <a href="./dashboard.php">Danh sách khách sạn</a>
    </div>
    <div class="insert-btn"><button type="button" id="insert" class="btn btn-success insert-button">Thêm</button>
    </div>
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tên khách sạn</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Khu vực</th>
                    <th scope="col">Số lượng phòng</th>
                    <th scope="col">Nhà hàng</th>
                    <th scope="col">Phòng họp</th>
                    <th scope="col">Đám cưới</th>
                    <th scope="col">Massage</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Đang hoạt động</th>

                </tr>
            </thead>

            <tbody>
                <?php
                // phan trang + render
                include '../model/hotel.php';
                include '../controller/pagination.php';
                $itemSelect = 6;
                $countPage = countPageHotel($itemSelect);

                $page = 1;
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                }

                $start = $itemSelect * ($page - 1);

                //$end = $itemSelect*$page;

                $sqlSelectLimit = "select * from hotel_info limit $start , $itemSelect";
                $conn = connectDB();

                $result2 = mysqli_query($conn, $sqlSelectLimit);
                $i=1;

                while ($row = mysqli_fetch_array($result2, MYSQLI_NUM)) {
                    $nhahang = '';
                    $phonghop = '';
                    $damcuoi = '';
                    $massage = '';
                    $trangthai = '';
                    $row[5] == 1 ? $nhahang = 'checked=true' : $nhahang = '';
                    $row[6] == 1 ? $phonghop = 'checked=true' : $phonghop = '';
                    $row[7] == 1 ? $damcuoi = 'checked=true' : $damcuoi = '';
                    $row[8] == 1 ? $massage = 'checked=true' : $massage = '';
                    $row[10] == 1 ? $trangthai = 'checked=true' : $trangthai = '';

                    $img = '';
                    if ($row[11]) {
                        $img = '<img src="../uploads/' . $row[11] . '" alt="img" class="preview-img" />';
                    } else {
                        $img = '<img src="../assets/img/noimg.jpg" alt="img" class="preview-img"/>';
                    }
                    echo '
                <tr>
                    <form action="../controller/updateHotel.php" method="post" enctype="multipart/form-data">
                    <td style="display: none;"><input name="id_hotel" class="item-input" style="width: 30px; font-size:19px; font-weight: 700;" readonly value="' . $row[0] . '"/></td>
                    <td><input class="item-input" style="width: 30px; font-size:19px; font-weight: 700;" disabled value="' . $i . '"/></td>
                    <td><input name="img" id="file-' . $row[0] . '" class="input-img" type="file"/>
                    <label for="file-' . $row[0] . '" class="label-img" id="label-' . $row[0] . '">
                    ' . $img . '
                    </label>
                    </td>
                    <td><textarea name="name_hotel" class="item-input" type="text"> ' . $row[1] . ' </textarea></td>
                    <td><textarea name="phone" class="item-input" type="text"> ' . $row[2] . ' </textarea></td>
                    <td><textarea name="place" class="item-input" type="text"> ' . $row[3] . ' </textarea></td>
                    <td><textarea name="soluongphong" class="item-input" type="text"> ' . $row[4] . ' </textarea></td>
                    <td><input name="nhahang" class="item-input" type="checkbox" ' . $nhahang . '></td>
                    <td><input name="phonghop" class="item-input" type="checkbox" ' . $phonghop . '></td>
                    <td><input name="damcuoi" class="item-input" type="checkbox" ' . $damcuoi . '></td>
                    <td><input name="massage" class="item-input" type="checkbox" ' . $massage . '></td>
                    <td><textarea name="mota" class="item-input" type="text"> ' . $row[9] . ' </textarea></td>
                    <td><input name= "trangthai" class="item-input" type="checkbox" ' . $trangthai . ' /></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-sm m-0 py-1 px-2 mr-1">Cập nhật</button>
                        <a href="../controller/deleteHotel.php?id_hotel=' . $row[0] . '"><button type="button" class="btn btn-danger btn-sm m-0 py-1 px-2">Xóa</button></a>
                    </td>
                    </form>
                </tr>
                ';
                $i++;
                }

                ?>

            </tbody>


        </table>
    </div>

    <nav class="page-nav" aria-label="...">
        <ul class="pagination pagination-lg">
            <?php
            for ($i = 1; $i <= $countPage; $i++) {

                if (isset($_GET['page']) && $i == $_GET['page']) {
                    echo "<li class='page-item disabled'><a class='page-link' href='./dashboard.php?page=$i'>$i</a></li>";
                } else {
                    echo "<li class='page-item'><a class='page-link' href='./dashboard.php?page=$i'>$i</a></li>";
                }
            }
            if (isset($conn)) {
                mysqli_close($conn);
            }
            ?>


        </ul>
    </nav>
    <a href="./ticket.php" class="next-page">
        <button type="button" style="height: 50px; margin-right:20px; font-size: 18px;" class="btn btn-primary">Quản lý vé <i class="fas fa-arrow-circle-right"></i></button>
    </a>
    <a href="../controller/signoutAdmin.php" class="next-page" style="margin-top: 60px; margin-bottom:30px">
        <button type="button" style="height: 50px; margin-right:20px; font-size: 18px;" class="btn btn-danger">Đăng xuất</i></button>
    </a>


    <div class="modal" id="modal">
        <form class="form-post" id="form" action="../controller/insertHotel.php" enctype="multipart/form-data" method="post">
            <input type="file" name="img" id="img-insert">
            <label for="img-insert" id="label-insert">Chọn ảnh</label>
            <input type="text" placeholder="Tên khách sạn" name="name_hotel">
            <input type="text" placeholder="Số điện thoại" name="phone">
            <input type="text" placeholder="Khu vực" name="place">
            <input type="number" placeholder="Số lượng phòng" name="soluongphong">
            <textarea style="width:80%;" type="text" placeholder="Mô tả" name="mota"></textarea>
            <div class='box-check'>
                <span>Nhà hàng</span>
                <input type="checkbox" name="nhahang">

            </div>
            <div class='box-check'>
                <span>Phòng họp</span>
                <input type="checkbox" name="phonghop">

            </div>
            <div class='box-check'>
                <span>Đám cưới</span>
                <input type="checkbox" name="damcuoi">

            </div>
            <div class='box-check'>
                <span>Massage</span>
                <input type="checkbox" name="massage">

            </div>


            <button type="submit" class="btn btn-success">Thêm khách sạn</button>
        </form>
    </div>

    <!-- Table -->
    <script src="../assets/libs/autosize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        autosize(document.querySelectorAll('textarea'));
    </script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>