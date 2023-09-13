<?php require './header.php'; ?>
<div class="titleHeading">タイトル</div>
<div class="createdAtHeading">作成日</div>
    <?php 
    $pdo = new PDO('mysql:host=localhost;dbname=memos;charset=utf8',
    'writer', 'password');
    foreach ($pdo->query('select title, created_at from memo') as $row){
        echo '<form action="memo-detail.php">';
        echo '<input type="hidden" name="title" value="', $row['title'], '">';
	    echo '<div class="title">', $row['title'], '</div> ';
        echo '<input type="hidden" name="created_at" value="', $row['created_at'], '">';
	    echo '<div class="createdAt">', $row['created_at'], '</div> ';
        echo '<div class="update"><input type="submit" value="更新"></div>';
        echo '</form>';
        echo"\n";
    }
    ?>