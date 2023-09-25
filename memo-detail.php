<?php require './header.php'; ?>
 <?php
    $pdo = new PDO('mysql:host=localhost;dbname=memos;charset=utf8', 'writer', 'password');
    $sql=$pdo->prepare('select * from memo where id=?');
    $sql->execute([$_REQUEST['id']]);
    $row=$sql->fetch();
    echo '<form action="memo-update.php" method="post">';
    echo '<div class="memo-body">';
    echo 'タイトル';
    echo '<div class="memo-detail-title">';
    echo '<input type="hidden" name="id" value="', $row['id'],'">';
    echo '<input type="text" name="title" value="', $row['title'],'">';
    echo '</div>';
    echo '内容';
    echo '<div class="memo-detail-details">';
    echo ' <input type="text" name="details" value="', $row['details'], '">';
    echo '</div>';
    echo $row['created_at'];
    echo '<input type="submit" value="更新">';
    echo '<a href="memo-delete.php?id=', $row['id'],'">削除</a>';
    echo '</form>';
 ?>