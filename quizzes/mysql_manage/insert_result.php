<?php
require_once 'insert_question.php';
require_once "connction.php";
session_start();
$name = $_POST['name'];
$sname = $_POST['sname'];

$answers = [
    'step_1' => $_SESSION['step_1'],
    'step_2' => $_SESSION['step_2'],
    'step_3' => $_SESSION['step_3'],
];

$answersJson = json_encode($answers);

insert(connect(),$name,$sname,$answersJson);
