<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

 <body>
   <P>
     <?php 
      // クラスを定義する
      class Food {

        // プロパティを定義する
        private $name;
        private $price;

        // メソッドを定義する
        public function set_price(string $price) {
          $this->price = $price;
        }
        public function show_price() {
          echo $this->price . '<br>';
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $price ) {
          $this->name = $name;
          $this->price = $price;
        }
      }

      // インスタンス化する
      $food = new Food('potato', 250);            
      
      ?>
    </P>

    <P>
      <?php
      // クラスを定義する
      class Animal {

        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        // メソッドを定義する
        public function set_height(string $height) {
          $this->height = $height;
        }
        public function show_height() {
          echo $this->height . '<br>';
        }

        // コンストラクタを定義する
        public function __construct(string $name, string $height, string $weight ) {
          $this->name =$name;
          $this->height =$height;
          $this->weight =$weight;
        }
      }

      // インスタンス化する
      $animal = new Animal('dog', 60, 5000);

      ?>
     </P> 
    
    <P>
      <?php
      // インスタンス$foodの各プロパティの値を出力する
      print_r($food);

      //改行する
      echo '<br>';

      // インスタンス$animalの各プロパティの値を出力する
      print_r($animal); 

      //改行する
      echo '<br>';

      // メソッドにアクセスして実行する
      $food->show_price();

      // メソッドにアクセスして実行する
      $animal->show_height(); 

      ?>
   </P>    
    
  </body>
</html>

