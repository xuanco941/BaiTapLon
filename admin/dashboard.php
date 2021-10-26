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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <!-- Table -->
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
                <th scope="col">Trạng thái</th>

            </tr>
        </thead>

        <tbody>
            <?php
                include '../model/hotel.php';
                $result = selectAllHotel();
                while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
                    $nhahang = '';
                    $phonghop = '';
                    $damcuoi = '';
                    $massage = '';
                    $trangthai = '';
                    $row[5]==1 ? $nhahang = 'Có' : $nhahang = 'Không' ; 
                    $row[6]==1 ? $phonghop = 'Có' : $phonghop = 'Không' ; 
                    $row[7]==1 ? $damcuoi = 'Có' : $damcuoi = 'Không' ; 
                    $row[8]==1 ? $massage = 'Có' : $massage = 'Không' ; 
                    $row[10]==1 ? $trangthai = 'Đang hoạt động' : $trangthai = 'Ngừng hoạt động';
                    echo
                        '<tr>
                        <th scope="row">'.$row[0].'</th>
                        <td><img style="height:100%;" alt="img hotel" src="'.$row[11].'"/></td>
                        <td>'.$row[1].'</td>
                        <td>'.$row[2].'</td>
                        <td>'.$row[3].'</td>
                        <td>'.$row[4].'</td>
                        <td>'.$nhahang.'</td>
                        <td>'.$phonghop.'</td>
                        <td>'.$damcuoi.'</td>
                        <td>'.$massage.'</td>
                        <td>'.$row[9].'</td>
                        <td>'.$trangthai.'</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm m-0 py-1 px-2 mr-1">Sửa</button>
                            <button type="button" class="btn btn-danger btn-sm m-0 py-1 px-2">Xóa</button>
                        </td>
                    </tr>
                        '    
                    ;
                }
            ?>
            
        </tbody>


    </table>
    <!-- Table -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>