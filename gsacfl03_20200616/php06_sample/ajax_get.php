<?php
  include("functions.php");

  // var_dump($_GET);
  // exit();

  $search_word = $_GET["searchword"];

  $pdo = connect_to_db();
  $sql = "SELECT * FROM todo_table WHERE todo LIKE '%{$search_word}%'";

  $stmt = $stmt->prepare($sql);
  $status = $stmt->execute();

  if ($status == false) {
    // ...エラー処理を記述
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
  } else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
    exit();
  }

  ?>
