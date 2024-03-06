<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>この文章はPHPで出力しています。</p>
  <p>
    <?php
    echo 'この文章はPHPで出力しています。';
    echo 'こんにちは';
    echo '今日はいい天気ですね'
    ?>
  </p>
  <p>
    <?php
    // 四則演算（整数型）
    echo 45 + 18 ;
    echo '<br>';
    echo 30 - 2 ;
    echo '<br>' ;
    echo 15 * 6 ;
    echo '<br>' ;
    echo 30 / 3 ;
    echo '<br>' ;
    echo 45 % 8 ;
    ?>

    <?php
    // 四則演算（不動小数点型を含む）
    echo 4.5 + 1.8 ;
    echo '<br>' ;
    echo 3 - 1.2 ;
    echo '<br>' ;
    echo 1.5 * 0.6 ;
    echo '<br>' ;
    echo 3 / 0.3 ;
    echo '<br>' ;
    // 不動小数点型で生じる誤差の確認（結果が0.1にならない）
    echo 100 - 99.9 ;
    ?>

    <?php
    // 文字列の連結
    echo '45' . '18';
    echo '<br>';
    echo '今日の天気は' . '晴れ';
    echo '<br>';
    echo '今日の天気は' . '曇り';
    ?>
  </p>


</body>
</html>