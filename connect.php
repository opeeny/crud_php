<?php
$con = new mysqli("localhost", "root", "", "crud");
if ($con) {
    echo "connection a sucess";
}else{
    die(mysqli_error($con));
}

?>