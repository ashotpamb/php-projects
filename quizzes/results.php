<?php
require_once 'mysql_manage/insert_question.php';
session_start();
$_SESSION['step_3'] = $_POST['step_3'];
$result1 = $_SESSION['step_1'];
$result2 = $_SESSION['step_2'];
$result3 = $_SESSION['step_3'];


require_once 'templates/header.php';
require_once 'mysql_manage/select_from_db.php';
?>
<div class="container">
    <form action="" method="" class="result_form">
        <div class="form-group">
            <br for="exampleInputEmail1">Your Result is <?= $result1 . " " . $result2 . " " . $result3 ?></br></label>

            <label for="exampleInputEmail1">Please write your name </label>

            <input type="text" class="form-control" id="name" name="step_2">
            <label for="exampleInputEmail1">Please write your Srname </label>
            <input type="text" class="form-control" id="sname" name="step_2">
        </div>
        <br for="exampleInputEmail1">If you need add your result in DB pleas check Add button </br> </label>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

    <a href="mysql_manage/qa.php" class="btn btn-primary">Show Results</a>


</div>
<script>
    $('.result_form').submit(function (e) {
        e.preventDefault();
        var name = $("#name").val();
        var sname = $('#sname').val();
        $.ajax({
            url: 'mysql_manage/insert_result.php',
            type: 'POST',
            data: {"name": name, "sname": sname},
            success: function (response) {
                console.log(response)
            }
        })
    })
</script>
<?php
require_once 'templates/footer.php';

?>
