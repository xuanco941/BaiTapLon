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
    <title>Lịch sử đặt vé</title>
</head>

<body>
    <!-- Table -->
    <div class="head">
        <a href="./dashboard.php">Danh sách vé đã được đặt</a>
    </div>

    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên khách</th>
                    <th scope="col">Gmail</th>
                    <th scope="col">Tên khách sạn</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th scope="col">Yêu cầu</th>
                    <th scope="col">Chi phí</th>
                    <th scope="col">Trạng thái</th>

                </tr>
            </thead>

            <tbody>
                <?php
                // phan trang + render
                include '../model/ticket.php';
                include '../controller/pagination.php';
                $itemSelect = 6;
                $countPage = countPageTicket($itemSelect);

                $page = 1;
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                }

                $start = $itemSelect * ($page - 1);

                //$end = $itemSelect*$page;

                $sqlSelectLimit = "select * from ticket limit $start , $itemSelect";
                $conn = connectDB();

                $result2 = mysqli_query($conn, $sqlSelectLimit);

                while ($row = mysqli_fetch_array($result2, MYSQLI_NUM)) {
                    // $tenkhach = '';
                    // $gmail = '';
                    // $hotel_name = '';
                    // $ngaydat = '';
                    // $ngayketthuc = '';
                    // $yeucau = '';
                    $row[8] == 1 ? $trangthai = 'checked=true' : $trangthai = '';


                    echo '
                <tr>
                    <form action="../controller/updateTicket.php" method="post" >
                    <td><input name="id_ticket" class="item-input" style="width: 30px; font-size:19px; font-weight: 700;" readonly value="' . $row[0] . '"></td>
                   
                    <td><textarea name="tenkhach" class="item-input" type="text"> ' . $row[1] . ' </textarea></td>
                    <td><textarea name="gmail" class="item-input" type="text"> ' . $row[2] . ' </textarea></td>
                    <td><textarea name="hotel_name" class="item-input" type="text"> ' . $row[3] . ' </textarea></td>
                    <td><input name="ngaydat" class="item-input" type="date" value ="' . $row[4] . '" ></td>
                    <td><input name="ngayketthuc" class="item-input" type="date" value ="' . $row[5] . '"></td>
                    <td><textarea name="yeucau" class="item-input" type="text">' . $row[6] . '</textarea></td>
                    <td><input name="chiphi" class="item-input" type="number" value ="' . $row[7] . '"></td>
                    <td><input name= "trangthai" class="item-input" type="checkbox"' . $trangthai . ' /></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-sm m-0 py-1 px-2 mr-1">Cập nhật</button>
                        <a href="../controller/deleteTicket.php?id_ticket=' . $row[0] . '"><button type="button" class="btn btn-danger btn-sm m-0 py-1 px-2">Xóa</button></a>
                    </td>
                    </form>
                </tr>
                ';
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

    <a href="./dashboard.php" class="next-page">
        <button type="button" style="height: 50px; margin-right:20px; font-size: 18px" class="btn btn-primary">Quản lý khách sạn <i class="fas fa-arrow-circle-right"></i></button>
    </a>
    <a href="../controller/signoutAdmin.php" class="next-page" style="margin-top: 60px; margin-bottom:30px">
        <button type="button" style="height: 50px; margin-right:20px; font-size: 18px;" class="btn btn-danger">Đăng xuất</i></button>
    </a>


    <!-- Table -->
    <script src="../assets/libs/autosize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        autosize(document.querySelectorAll('textarea'));
    </script>
    <script src="../assets/js/ticketAdmin.js"></script>
</body>

</html>