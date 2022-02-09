<?php
require_once ROOT."/views/includes/header.php";
require_once ROOT."/views/includes/navbar.php";
?>
<div id="accordion">

    <div class="card">
        <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                Question
            </a>
        </div>
        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body">
                <?=$question['question']?>
            </div>
        </div>
        <form action="<?$_SERVER['PHP_SELF']?>" method="post" id="submit">
        <?php foreach ($answers as $answer):?>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="<?=$answer?>" name="answer" value="<?=$answer?>">
            <label class="form-check-label" ><?=$answer?></label>
        </div>
        <?endforeach;?>
        <button type="submit" class="btn btn-success">Button</button>
        </form>
    </div>
    <script>
        $('#submit').submit(function (e) {
            e.preventDefault();
            var answer = $('input[name=answer]:checked').val();
            $.ajax({
                url:$(location).attr('href'),
                type:"POST",
                data:{'answer':answer},
                success:function (data) {
                    location.reload();
                }
        })
        })
    </script>
