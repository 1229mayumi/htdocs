<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎</title>
</head>
<body>
  <p>
    <?php
    //変数$numに0~4までのランダムな整数を代入する
    $num = mt_rand(0, 4);

    //カウンタ変数を用意する
    $i = 1;

    //変数＄numの最初の値を出力する（確認用）
    echo "最初の値は{$num}です。<br>";

    //変数$numの値が0以外である間、変数$numの値を出力し続ける
    while($num !== 0){
      //変数$numに０〜４までのランダムな変数を代入する
      $num = mt_rand(0, 4);
      //次の条件式で比較される、変数$numの現在の値を出力する
      echo "現在の値は{$num}です。<br>";
      //カウンタ回数$iの値が５であれば、break文で繰り返し処理を強制終了する
      if ($i === 5){
        echo '5回面なので繰り返し処理を強制終了します。';
        break;
      }

      //カウンタ変数の値を1増やす
      $i++;
    }
    ?>
  </p>
  <P>
    <?php
    //合計用の変数を用意する
    $sum = 0;

    //変数＄sumの値が20以上になるまで繰り返し処理を行う
    while ($sum < 20){

      //変数$numに1~10までのランダムな整数を代入する
      $num = mt_rand(1, 10);
      
      echo "{$num}が出ました。<br>";

      if ($num % 2 === 0){
        echo '偶数なので加算しません。<br>';
        continue;
      }

      //変数$sumに変数$numの値を加算する
      $sum += $num;

      echo "現在の合計は{$sum}です。<br>";
    }
    ?>
  </P>
</body>
</html>