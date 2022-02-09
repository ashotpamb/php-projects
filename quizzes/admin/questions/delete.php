<?php
require_once '../../mysql_manage/connction.php';
require_once '../../mysql_manage/update.php';

$sql = "DELETE FROM question WHERE id = ".$_GET['id'];
mysqli_query(connect(),$sql);
header("Location:index.php");