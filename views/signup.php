<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/formSign.css">
    <title>Đăng ký</title>
</head>

<body>

    <div class="container-fluid">
        <div class="main row">

            <form class="form-center col-sm-5" style="height: 350px;" action="../controller/signup.php" method="POST">
                <div class="row mb-2">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3" name="gmail">
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mật khẩu</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword3" name="password">
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nhập lại khẩu</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword3" name="repeat_password">
                    </div>
                </div>
                <span class="notify">
                    day la cho hien thong bao
                </span>
                <div class="footer-form">
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                    <a href="./signin.php"><button type="button" class="btn btn-outline-warning">Đã có tài khoản?</button></a>
                </div>

            </form>

        </div>
    </div>

</body>

</html>