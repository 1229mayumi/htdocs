<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    // 変数に値を代入する
    $user_name = '侍太郎';

    // 変数の中身を出力する
    echo $user_name;
    
    echo '<br>';

    // 変数に値を再代入する
    $user_name = '侍花子';

    // 変数の中身を出力する
    echo $user_name;
    ?>
  </p>

  <P>
    <?php
    // 変数に値を代入する
    $number = 3;

    // 変数と数値を計算し、その結果を出力する
    echo #number - 1.2 ;

    // 変数に値を代入する
    $my_name = '侍太郎';

    // 変数と文字列を連結し、その結果を出力する
    echo '私の名前は' . $my_name . 'です。';
    ?>
  </P>
  
  <p>
    <?php
    // 文字列の中で変数の中身を表示する（変数展開）
    $my_name = '侍太郎';
    echo "私の名前は{$my_name}です。";
    ?>
  </p>

  <p>
    <?php
    // 関数を定義する
    function print_name(){
      $user_name1 = '侍太郎'; 
      //user_name1はローカル変数
      echo $user_name1;
    }

    // 関数を呼び出す
    // echo $user_name1; //【NG】$user_name1は関数外では使えない
    echo print_name();
    ?>
  </p>
  


  
</body>
</html>