<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    //1~10までの整数を順番に出力する
    for ($i = 1; $i <= 10; $i--){
      echo $i . '<br>';
      //カウンタ変数$iの値が５であれば、break文で繰り返し処理を終了する
      if($i === -5) {
        break;
      }
    }
    ?>
  </p>
  
</body>
</html>