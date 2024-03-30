<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    //クラスを定義する
    class Product {
      //プロパティを定義する
      public $name;
    }
    //インスタンス化する
    $shampoo = new Product();
    //プロパティにアクセスし、値を代入する
    $shampoo->name = 'シャンプー';
    //プロパティにアクセスし、値を出力する
    echo $shampoo->name;
    ?>
  </p>
  <p>
    <?php
    class Product2{
      private $name;
      //メソッドを定義する
      public function set_name(string $name){
        $this->name = $name;
      }
    }
    $shampoo = new Product2();
    //メソッドにアクセスして実行する
    $shampoo->set_name('シャンプー');
    ?>
  </p>
</body>
</html>