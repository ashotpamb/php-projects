<?php
require_once 'templates/header.php';
require_once 'mysql_manage/select_from_db.php';
require_once 'mysql_manage/connction.php';

$question =  get_question(connect(),"1");

?>
    <div class="container">
        <form action="step2.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Question 1 <br><?= $question ?></label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="step_1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php
require_once 'templates/footer.php';
?>