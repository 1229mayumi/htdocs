<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body
  <p>
    <?php
    // クラスを定義する
    class Product {
    // プロパティを定義する
    //  public $name;
      private $name;

      // メソッドを定義する
      public function set_name(string $name) {
          $this->name = $name;
      }
      public function show_name() {
          echo $this->name . '<br>';
      }
    }

    // インスタンス化する
    $coffee = new Product();

    // メソッドにアクセスして実行する
    $coffee->set_name('コーヒー');
    $coffee->show_name();

    // インスタンス化する
    $shampoo = new Product();

    // プロパティにアクセスし、値を代入する
    $shampoo->name = 'シャンプー';

    // プロパティにアクセスし、値を出力する
    echo $shampoo->name;
    ?>
  </p>
</body>
</html>