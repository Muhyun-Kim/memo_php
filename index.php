<?php require './header.php'; ?>
<table>
    <tr>
        <th>タイトル</th>
        <th>作成日</th>
    </tr>
    <?php 
    $pdo = new PDO('mysql:host=localhost;dbname=memos;charset=utf8',
    'writer', 'password');
    foreach ($pdo->query('select title, created_at from memo') as $row){
        echo '<tr>';
        echo '<td>', htmlspecialchars($row['title']), '</td>';
        echo '<td>', htmlspecialchars($row['created_at']), '</td>';
        echo '<tr>';
        echo"\n";
    }
    ?>
</table>
