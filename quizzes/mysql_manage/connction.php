<?php
function connect(){
    $connection = mysqli_connect("localhost", "root", "","test_site");
    mysqli_set_charset($connection, "utf8");
    if (mysqli_connect_errno()) {
        echo "Connection faild" . mysqli_connect_error();
    } else {

    }
    return $connection;
}
