<nav class="navbar navbar-expand-md navbar-light sticky-top " style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-branch" href="#">
            <img src="image/mau-logo-khach-san-dep-1.png" height="50">
        </a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Make a reservation</a>
                </li>

            </ul>

            <ul class="navbar-nav ms-auto">
                <li>
                    <form action="../controller/searchHotel.php" method="GET" class="input-group">
                        <input type="text" class="form-control" placeholder="search" aria-label="search" name="hotel_name">
                        <a class="btn btn-warning" href="#" role="button"><button style="color: inherit; background-color:inherit; border:none;" type="submit">search</button></a>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="#" role="button"><i class="fas fa-cart-plus"></i>cart</a>
                    <a class="btn btn-warning" href="./signin.php" role="button">Sign in</a>
                    <a class="btn btn-warning" href="./signup.php" role="button">Sign up</a>
                </li>

            </ul>
        </div>
    </div>
</nav>