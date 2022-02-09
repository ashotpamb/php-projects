<?php
require_once '../../mysql_manage/select_from_db.php';
require_once '../../templates/header.php';
require_once '../../templates/footer.php';
require_once '../../mysql_manage/connction.php';
require_once '../../mysql_manage/update.php';
session_start();
if (isset($_GET['id'])) {
    $_SESSION['id'] = $_GET['id'];
    $question =  get_question(connect(),  $_SESSION['id']);
}else{
    $question =  get_question(connect(),$_SESSION['id']);

}
if(isset($_POST['newQuestion'])) {
    update(connect(),$_SESSION['id'],$_POST['newQuestion']);
    $question =  get_question(connect(),$_SESSION['id']);
}

?>
<div class="container">
    <form action="update.php" method="post" class="result_form">
        <div class="form-group">
            <label for="exampleInputEmail1">New question</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="newQuestion" value="<?=$question?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<!--<script>-->
<!--    $(".result_form").submit(function (e) {-->
<!--        e.preventDefault();-->
<!--        var newAnswer = $('.form-control').val();-->
<!--        -->
<!--    })-->
<!--</script>-->