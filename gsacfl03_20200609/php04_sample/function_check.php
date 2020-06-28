<?php

// ログインしているかどうかのチェック→毎回id再生成
function check_session_id () {
// 失敗時はログイン画面に戻る(セッションidがないor一致しない) 
if (!isset($_SESSION['session_id']) ||
$_SESSION['session_id']!=session_id()) { header('Location: login.php'); // ログイン画面へ移動
} else {
session_regenerate_id(true); // セッションidの再生成
$_SESSION['session_id'] = session_id(); // セッション変数に格納
}
}
?>