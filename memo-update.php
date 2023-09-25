<?php require './header.php'; ?>
<?php
    $pdo=new PDO('mysql:host=localhost;dbname=memos;charset=utf8', 'writer', 'password');
    $sql=$pdo->prepare('update memo set title=?, details=?, created_at=now() where id=?');
    if (empty($_REQUEST['title'])) {
        echo 'タイトルを入力してください';
    } else
    if ($sql->execute(
        [htmlspecialchars(
        $_REQUEST['title']),
        $_REQUEST['details'],
        $_REQUEST['id']]
    )) {
        echo '更新に成功しました';
    } else {
        echo '更新に失敗しました';
    }
?>