<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($array, $order) {
      if ($order) {
        // 昇順にソート
        echo '昇順にソートします。<br>';
        sort($array); 
      } else {
        // 降順にソート
        echo '降順にソートします。<br>';
        rsort($array); 
      }

      // ソート結果を表示
      foreach ($array as $num) {
        echo $num . '<br>';
      }
    }

      // ソートする配列
      $nums = [15, 4, 18, 23, 10];

      // 昇順ソートの呼び出し
      sort_2way($nums, true);

      // 降順ソートの呼び出し
      sort_2way($nums, false);
      ?>
    </p>
</body>

</html>

    
   
