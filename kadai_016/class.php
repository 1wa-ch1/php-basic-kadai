<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // Foodクラスを定義
    class Food {
      // プロパティを定義
      private $name;
      private $price;

      // コンストラクタを定義
      public function __construct(string $name, int $price) {
        $this->name = $name; 
        $this->price = $price;
      }
      // メソッドを定義
      public function show_price() {
        echo $this->price . '<br>';
        }
    }

      // インスタンス化
      $food = new Food('potato', 250);

      // $foodの各プロパティの値を出力する
      print_r($food);
      echo '<br>';
      
    // Animalクラスを定義 
    class Animal {
      // プロパティを定義
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッドを定義
      public function show_height() {
        echo $this->height . '<br>';
      }
    }

      // インスタンス化
      $animal = new Animal('dog', 60, 5000);

      // $animalの各プロパティの値を出力する
      print_r($animal);
      echo '<br>';

      // メソッドにアクセスしメソッドを実行
      $food->show_price();
      $animal->show_height();


    ?>
  </p>

</body>
</html>