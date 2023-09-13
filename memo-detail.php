<?php require './header.php'; ?>
<div class="titleHeading">タイトル</div>
<div class="createdAtHeading">作成日</div>
    <?php 
    $pdo = new PDO('mysql:host=localhost;dbname=memos;charset=utf8',
    'writer', 'password');
    
    ?>