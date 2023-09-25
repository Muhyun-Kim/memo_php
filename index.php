<?php require './header.php'; ?>
    <?php 
    echo '<table>';
    echo '<tr><th>タイトル</th><th>更新時</th></tr>';
    $pdo = new PDO('mysql:host=localhost;dbname=memos;charset=utf8',
    'writer', 'password');
    $sql=$pdo->query('select * from memo order by created_at desc');
    foreach ($sql as $row){
        $id = $row['id'];
        echo '<tr>';
        echo '<td>';
        echo '<a href="memo-detail.php?id=', $id,'">', $row['title'], '</a>';
        echo '</td>';
        echo '<td>', date('Y-m-d H:i', strtotime($row['created_at'])),'</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>