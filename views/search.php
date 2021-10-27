<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/search.css">
    <title>Tìm kiếm</title>
</head>

<body>
    <?php
    include './partials/header.php';
    ?>

    <div class="container">
        <div class="col spaceSearch">
            <form action="" method="get" id="formSearch">
                <span class="brand">@</span>
                <input type="search" name="search" id="inputSearch">
                <button type="submit" id="submitSearch">Tìm kiếm</button>
            </form>
            <div class="listUserSearch">
                <a href="/{{this.username}}" class="userSearch">
                    <div class="nameSearch">sadasdas</div>
                    <img src="{{this.avatar}}" alt="avatar" srcset="" class="imgSearch">
                </a>
            </div>
        </div>
    </div>
    <?php
    include './partials/footer.php';
    ?>
    <script>

    </script>

</body>

</html>