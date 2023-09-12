<?php require './header.php'; ?>
<p>メモを追加</p>
<form action="create-memo-output.php" method="post">
タイトル<input type="text" name="title">
本文<input type="text" name="details">
<input type="submit" value="追加">
</form>
