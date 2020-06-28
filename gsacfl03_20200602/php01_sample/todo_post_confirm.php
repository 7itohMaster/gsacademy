<?php
// データを受け取ると，受け取ったデータを元に処理を実行し，htmlのデータを返す
// まずデータの受取を確認
// var_dump($_POST);
// exit();

// name属性の値を指定してデータを受け取る



// 上記の変数をhtmlに埋め込んで表示する

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo表示画面（POST）</title>
</head>

<body>
  <fieldset>
    <legend>todo表示画面（POST）</legend>
    <table>
      <thead>
        <tr>
          <th>todo</th>
          <th>deadline</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </fieldset>
</body>

</html>