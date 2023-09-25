<?php require './header.php'; ?>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=memos;charset=utf8', 'writer', 'password');
    $sql = $pdo->prepare('delete from memo where id=?');
    if($sql->execute([$_REQUEST['id']])){
        echo '削除しました';
    } else {
        echo '削除に失敗しました。';
    }
?>