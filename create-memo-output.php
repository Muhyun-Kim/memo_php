<?php require './header.php'; ?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=memos;charset=utf8', 'writer', 'password');
$sql = $pdo->prepare('insert into memo values (null, ?, ?, now())');
if(empty($_REQUEST['title'])){
    echo 'タイトルを入力してください';
} else
if(empty($_REQUEST['details'])){
    echo '内容を入力してください';
} else
if($sql->execute(
    [htmlspecialchars($_REQUEST['title']), $_REQUEST['details']]
)) {
    echo 'メモが追加されました';
} else {
    echo 'メモ追加に失敗しました';
}
?>