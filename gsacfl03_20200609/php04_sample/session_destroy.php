<?php
  session_start();

  // session変数を削除
  unset($_SESSION['KEY']);

  // session情報の全削除
  $_SESSION = array();
  setcookie(session_name(), '', time() - 42000, '/');

  // session破壊
  session_destroy();

?>