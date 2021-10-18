<?php
    include "connect.php";

    $sql = "delete from users where id = '$id'";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "Delete ok";
    }else {
        echo "not ok"
        die(mysqli_error($con));
    }
?>