<?php
$user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

// 2番目の要素を更新する
$user_names[1] = '侍花子'; 

// 6番目に要素を追加する
// $user_names[5] = '侍五郎';
$user_names[] = '侍五郎';

echo $user_names[1];
echo '<br>';
echo $user_names[5];

?>
