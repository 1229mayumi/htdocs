<?php
// ファイルをロード（読み込み）
require_once 'load_test.php'; //【NG】ファイル名が違う（loadがroadに）

// load_test.phpからロードしたLoadTestクラスを使用
$object = new LoadTest();
$object->test();
?>
