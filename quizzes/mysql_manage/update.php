<?php
function update($conn,$id,$value) {
    $sql = "UPDATE question SET question = '".$value."' WHERE id = " . $id. ";";
    $updateTable = mysqli_query($conn,$sql);
    return $updateTable;

}