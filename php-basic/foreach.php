<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎</title>
</head>
<body>
  <p>
    <?php
    $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

    //配列$user_namesの要素を１つづつ順番に出力する
    foreach ($user_names as $user_name){
      echo $user_name . '<br>';
    }
    ?>
  </p>
  <p>
    <?php
    $personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];

    //連想配列$personal_dataのキーと値を１つづつ順番に出力する
    foreach ($personal_data as $key => $value){
      echo "{$key}は{$value}です。";
    }
    echo '<br>';
    
     //連想配列$personal_dataの値(キーなし）を１つづつ順番に出力する
     foreach ($personal_data as $value){
      echo $value;
    }
    ?>
  </p>
</body>
</html>