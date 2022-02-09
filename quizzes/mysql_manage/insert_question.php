<?php
function insert($conn,$user_name,$user_sname,$user_result){

    $sql = "INSERT INTO results (user_name,user_sname,user_result)values('".$user_name."','".$user_sname."','".$user_result."')";
    mysqli_query($conn,$sql);
}
function insertQuestion($conn,$question) {
    $sql = "INSERT INTO question (question) VALUES ('".$question ."')";
    mysqli_query($conn,$sql);
}