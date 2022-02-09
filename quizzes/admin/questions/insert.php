<?php
require_once '../../mysql_manage/insert_question.php';
require_once '../../templates/header.php';
require_once '../../templates/footer.php';
require_once '../../mysql_manage/connction.php';
require_once '../../mysql_manage/update.php';
if(isset($_POST['newQuestion'])) {
    insertQuestion(connect(),$_POST['newQuestion']);
}
?>
<div class="container">
    <form action="insert.php" method="post" class="result_form">
        <div class="form-group">
            <label for="exampleInputEmail1">New question</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="newQuestion">
        </div>
        <button type="submit" class="btn btn-primary">Insert</button>
    </form>
</div>