<?php
//require_once 'connction.php';
function get_question($conn,$question=""){
//    $conn =  connect();
     if(!$question == "") {
         $sql_query = mysqli_query($conn,"SELECT * FROM question ORDER BY RAND()");
         $result = mysqli_fetch_array($sql_query);
         //print_r($result);
         return $result['question'];


     }   else{
            $sql_query = mysqli_query($conn,"SELECT * FROM question;");
            $result = mysqli_fetch_all($sql_query, MYSQLI_ASSOC);
            return $result;
     }


}