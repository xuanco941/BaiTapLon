<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="../assets/css/header.css">
<nav id="navbar-pc" class="navbar navbar-expand-md navbar-light sticky-top " style="background-color: #e3f2fd;">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item item-head">
                    <a id="trangchu" class="nav-link " href="../index.php">Trang chủ</a>
                </li>
                <li class="nav-item item-head">
                    <a id="datvenhanh" class="nav-link" href="./pickticket.php">Đặt vé nhanh</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li>
                    <form action="./search.php" method="GET" class="input-group search_mb">
                        <input type="text" class="form-control" placeholder="Nhập tên khách sạn" aria-label="search" name="name_hotel">
                        <a class="btn btn-primary" href="#" role="button"><button style="color: inherit; background-color:inherit; border:none;" type="submit">Tìm kiếm</button></a>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="./ticket.php" class="btn btn-info" style="color: blue;" href="#" role="button"><i class="fas fa-cart-plus"></i>Vé đặt</a>
                    <?php
                    if (!isset($_SESSION['loginSuccess'])) {
                        echo '
                <a style="color: white;" class="btn btn-success" href="./signin.php" role="button">Đăng nhập</a>
                <a style="color: white;" class="btn btn-primary" href="./signup.php" role="button">Đăng ký</a>
                ';
                    } else {
                        echo '<a style="color: white;" class="btn btn-danger" href="../controller/signout.php" role="button">Đăng xuất</a>';
                    }
                    ?>
                </li>

            </ul>
        </div>
    </div>
</nav>

<nav id="navbar-mb" class="navbar navbar-expand-md navbar-light sticky-top " style="background-color: #e3f2fd;">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" style="width:148px" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><a class="dropdown-link" href="./pickticket.php"><button class="dropdown-item" type="button">Đặt vé nhanh</button></a></li>
            <li><a class="dropdown-link" href="./ticket.php"><button class="dropdown-item" type="button">Vé đặt</button></a></li>
            <li><a class="dropdown-link" href="./search.php"><button class="dropdown-item" type="button">Tìm kiếm</button></a></li>
            <?php
            if (!isset($_SESSION['loginSuccess'])) {
                echo '
          <li  ><a class="dropdown-link" href="./signin.php" ><button class="dropdown-item" type="button">Đăng nhập</button></a></li>
          <li  ><a class="dropdown-link" href="./signup.php"><button class="dropdown-item" type="button">Đăng ký</button></a></li>
                ';
            } else {
                echo '<li  ><a class="dropdown-link" href=../controller/signout.php><button class="dropdown-item" type="button">Đăng xuất</button></a></li>';
            }
            ?>

        </ul>
    </div>
    <a style="font-size:20px ; text-decoration: none; color: black; position:absolute; top:0; right:0; margin-top:8px;" href="../index.php"><button style="width:148px;" class="btn btn-secondary">Trang chủ</button></a>
</nav>