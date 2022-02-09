<?php
require_once '../../mysql_manage/select_from_db.php';
require_once '../../templates/header.php';
require_once '../../templates/footer.php';
require_once '../../mysql_manage/connction.php';
$questions = get_question(connect(),'');

?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Question</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($questions as $question):?>
    <tr>
        <th scope="row"><?=$question['id']?>
            <a href="update.php?id=<?=$question['id'];?>" class = "edit">Edit</a>
            <a href="delete.php?id=<?=$question['id'];?>" class = "edit">Delete</a>

        </th>
        <td><?=$question['question']?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
<a  href="insert.php" class="btn-lg btn-secondary">Insert</a>
