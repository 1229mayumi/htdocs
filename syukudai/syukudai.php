<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>宿題</title>
</head>
<body>
  //htmlの内容を表示
  <p>
    <?php
    echo '<ol>';
    echo '<li>侍一子</li>';
    echo '<li>侍二子</li>';
    echo '<li>侍三子</li>';
    echo '<li>侍四子</li>';
    echo '<li>侍五子</li>';
    echo '</ol>';
  ?>
  </p>

  <p>
    <?php
    $user_names = ['侍一子', '侍二子', '侍三子', '侍四子', '侍五子'];

    // // 開始タグを出力
    // echo '<ol>';

    //配列$user_namesの値を順番に出力する
    foreach ($user_names as $user_name){
       echo "<li>$user_name</li>";
    }
    // // 終了タグを出力
    // echo '</ol>';
    ?>
  </p>

  <p>
    <?php
    $user_names = ['侍一子', '侍二子', '侍三子', '侍四子', '侍五子'];

    //配列$user_namesの値を順番に出力する
    foreach ($user_names as $user_name){
       echo "<li>$user_name</li>";
    }
    
    ?>
  </p>
  
</body>
</html>