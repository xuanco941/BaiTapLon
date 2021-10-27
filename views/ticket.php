
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/main.css">
  <link rel="stylesheet" href="../assets/css1/styleUserHome.css">
    <title>Document</title>
</head>
<body>
    


<?php
 include './partials/header.php'
?>

    <div class="container-fluid">
        <div class="text-center slogan my-4">
            <h2>Nhanh chóng, tiện lợi số 1 Châu Phi
            </h2>
        </div>
        <main>

            <table class="table my-4">
                <thead>
                    <tr>
                        <th scope="col">Tên khách</th>
                        <th scope="col">Gmail</th>
                        <th scope="col">Tên khách sạn</th>
                        <th scope="col">Ngày đặt</th>
                        <th scope="col">Ngày kết thúc</th>
                        <th scope="col">yêu cầu</th>
                        <th scope="col">Chi phí</th>
                        <th scope="col">trạng thái</th>


                    </tr>
                </thead>
                <tbody>

                    <?php

                    include '../model/connectDB.php';

                    $sql = "SELECT * FROM `ticket` where  ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<th scope="row">'. $row['id'] . '</th>';
                            echo '<td>' . $row['tenkhach'] . '</td>';
                            echo '<td>' . $row['gmail'] . '</td>';
                            echo '<td>' . $row['hotel_name'] . '</td>';
                            echo '<td>' . $row['ngaydat'] . '</td>';
                            echo '<td>' . $row['ngayketthuc'] . '</td>';
                            echo '<td>' . $row['yeucau'] . '</td>';
                            echo '<td>' . $row['chiphi'] . '</td>';
                            echo '<td>' . $row['trangthai'] . '</td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
<?php 
include './partials/footer.php'
?>
</body>

</html>
