<?php
function select_result($conn)
{
    $sql = "SELECT * FROM results";
    $result = mysqli_query($conn, $sql);
    $resutArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $resutArray;
}