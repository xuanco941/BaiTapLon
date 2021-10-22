<form action="" method="get">
    <input type="text" name="gmail">
    <input type="text" name="code">
    <button type="submit"></button>
</form>
<?php
    include './modal/connectDB.php';
    $conn = connectDB();
    if($conn) echo 'success';
?>


