<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>foreach文を使って連想配列の値をキーを出力しよう</title>
</head>

<body>
  <p>
    <?php
    $vegetable = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    // 連想配列$vegetableのキーと値を1つずつ順番に出力する
    foreach ($vegetable as $key => $value) {
      echo "{$key}:{$value}<br>";
    }
    ?>
  </p>
</body>

</html>
