<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1; // neu = 0 thi khong cho up
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Kiem tra xem co phai file anh khong
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Day la anh- " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Day khong phai anh";
    $uploadOk = 0;
  }
}

// neu filr ton tai roi khi set $uploadOk = 0
if (file_exists($target_file)) {
  echo "File da ton tai.";
  $uploadOk = 0;
}

// gioi han kich thuoc anh
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "kich thuoc qua lon";
  $uploadOk = 0;
}

// chi cho upfile jpg , png , jpeg , gif
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "chi cho upfile jpg , png , jpeg , gif";
  $uploadOk = 0;
}

// Neu uploadOk = 1 thi cho up
if ($uploadOk == 0) {
  echo "Loi up";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Loi up";
  }
}
?>