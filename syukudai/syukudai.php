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

    echo '<ol>';

    //配列$user_namesの値を順番に出力する
    foreach ($user_names as $user_name){
       echo "<li>$user_name</li>";
    }

    echo '</ol>';
    ?>
  </p>
  
</body>
</html>