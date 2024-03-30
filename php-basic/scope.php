<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php function show_user_name(){
      //ローカル変数を定義する
      $user_name = '侍太郎';
      //ローカルスコープの範囲内でローカル変数を使う
      echo $user_name . '<br>';
    }
    show_user_name();

    //ローカルスコープの範囲外でローカル変数を使う（エラーが発生する）
    // echo $use_name;
    ?>
  </p>
  <p>
    <?php
    //グローバル変数を定義する
    $user_name = '侍花子';

    function show_user_name2(){
      //ローカル変数を定義する
      $user_name = '侍太郎';
      //ローカルスコープ内でローカル変数を使う
      echo $user_name . '<br>';
    }
    show_user_name2();

    //グローバルスコープの範囲ないでグローバル変数を使う
    echo $user_name;
    ?>
  </p>
  
</body>
</html>