<?php
require_once 'templates/header.php';
require_once 'mysql_manage/select_from_db.php';
require_once 'mysql_manage/connction.php';
$question =  get_question(connect(),"3");
session_start();
$_SESSION['step_2'] = $_POST['step_2'];
?>
<div class="container">
    <form action="results.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Question 3 <br><?=$question?></label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="step_3">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
require_once 'templates/footer.php';

?>