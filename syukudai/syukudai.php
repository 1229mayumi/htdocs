<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>宿題</title>
</head>
<body>
  <p>
    <?php
    $user_names = ['侍一子', '侍二子', '侍三子', '侍四子', '侍五子'];
    //配列$user_namesをインデックス（１から始める）と値を順番に出力する
    foreach ($user_names as $index => $value){
      $no = $index + 1;
      echo "{$no} : {$value} <br>"; 
    }
    var_dump($user_names)
    ?>
  </p>
  
</body>
</html>