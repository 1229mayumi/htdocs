<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>break文を作ってみよう</title>
</head>
<body>
  <P>
    <?php
    for ($i = 1; $i <= 10; $i++){
      //変数$numに1~20までのランダムな整数を代入する
      $num = mt_rand(1, 20);

      echo "{$i}回目の結果は{$num}です。<br>";

      //変数$numの値が20であれば、break文で繰り返し処理を強制終了する
      if ($num === 20) {
        echo '20が出たので繰り返し処理を強制終了します。';
        break;
      }
    }
    ?>
  </P>
  
</body>
</html>