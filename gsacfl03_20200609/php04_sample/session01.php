<?php
// session変数を定義して値を入れよう

  session_start();

  $_SESSION['number'] = 100;
  $_SESSION['name'] = 'gs';

  var_dump($_SESSION);
  // echo $_SESSION['number'];

?>


