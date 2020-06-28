<?php
  session_start();
  include("functions.php");

  // var_dump($_GET);
  // array(2) { ["user_id"]=> string(1) "3" ["todo_id"]=> string(1) "1" }

  // データ取得
  $user_id = $_GET['user_id'];
  $todo_id = $_GET['todo_id'];

  $pdo = connect_to_db();

  // sql count検索
  $sql = 'SELECT COUNT(*) FROM like_table WHERE user_id=:user_id AND todo_id=:todo_id';

  // sql処理
  // $sql = 'INSERT INTO like_table(id, user_id, todo_id, created_at)VALUES(NULL, :user_id, :todo_id, sysdate())';

   // SQL作成
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->bindValue(':todo_id', $todo_id, PDO::PARAM_INT);
  $status = $stmt->execute();

  if ($status == false) {
  // エラー処理 
  } else {
    $like_count = $stmt->fetch();
    // var_dump($like_count[0]);
    // exit();
    // var_dump($status);
    // exit();
  }

  // if($like_count[0]){
  //   $sql = 'DELETE FROM like_table WHERE user_id=:user_id AND todo_id=:todo_id';
  // } else{
  //   $sql = 'INSERT INTO like_table(id, user_id, todo_id, created_at) VALUES(NULL, :user_id, :todo_id, sysdate())';
  // }

  if ($like_count[0] != 0) {
    $sql ='DELETE FROM like_table WHERE user_id=:user_id AND todo_id=:todo_id';
    } else {
    $sql = 'INSERT INTO like_table(id, user_id, todo_id, created_at) VALUES(NULL, :user_id, :todo_id, sysdate())'; // 1行で記述!
    }

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
  $stmt->bindValue(':todo_id', $todo_id, PDO::PARAM_INT);
  $status = $stmt->execute();
  if ($status == false) {
  // エラー処理
  } else {
    $like_count = $stmt->fetch();
    // var_dump($like_count[0]);
    // exit();
    // var_dump($status);
    // exit();
  }
  header('Location:todo_read.php');
  
?>
