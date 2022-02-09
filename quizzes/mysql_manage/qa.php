<?php
require_once 'connction.php';
require_once 'select_results.php';
require_once '../templates/header.php';
require_once '../templates/footer.php';
$results = select_result(connect());
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Question</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($results as $result):?>
    <tr>
        <th scope="row"><?=$result['id']?></th>
        <td><?=$result['user_name']?></td>
        <td><?=$result['user_sname']?></td>

        <td>
            <?php $answers = json_decode($result['user_result']);
            foreach ($answers as $question => $answer) {
                echo $question . ' ' . $answer . '</br>';
            }
            ?>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
