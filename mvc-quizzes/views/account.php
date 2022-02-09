<?php
require_once ROOT . "/views/includes/header.php";
?>
<div class="container d-flex justify-content-center align-items-center" xmlns="http://www.w3.org/1999/html">
    <div class="card">
        <div class="upper"><img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid"></div>
        <div class="user text-center">
            <!--            <div class="profile"><img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80"></div>-->
        </div>
        <div class="mt-5 text-center">
            <?php foreach ($data as $value): ?>
            <h4 class="mb-0"></h4><?= $value['name'] ?><span
                class="text-muted d-block mb-2"><?= $value['sname'] ?></span>

            <div class="stats">
                <h6 class="mb-0">User name</h6> <span><?= $value['login'] ?></span>

                <?php endforeach; ?>
            </div>

        </div>
        <form action="signin" method="post">
            <input type="hidden" name="logout">
            <button type="submit">Exit</button>
        </form>
    </div>
