<?php
    include "connect.php";
    if(isset($_GET["delete_id"])){
    $id = $_GET["delete_id"];

    $sql = "delete from `users` where id = '$id'";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "Delete ok";
        header('location:display.php');
    }else {
       // echo "not ok";
        die(mysqli_error($con));
    }
}else {
    echo 'not set';
}
?>