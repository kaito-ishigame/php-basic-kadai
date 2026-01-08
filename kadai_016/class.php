<?php
class Food {

  public $name; // nameプロパティ(要は変数)
  public $price; // priceプロパティ(要は変数)

  // 「price」プロパティの値を出力する「show_price」メソッド(要は関数)
  public function show_price() {
    echo $this->price;
  }

  // コンストラクタの定義（class Foodがインスタンス化したときに一番最初に実行される処理）
  public function __construct(string $name , int $price){
    $this -> name = $name; // this(このclassの中)
    $this -> price = $price; // this(このclassの中)
 }
}
    // インスタンス化（classを定義しただけでは利用不可、インスタンス化をすることで使用可能）
    $Sushi = new Food("maguro" , 108);
    $Sushi -> show_price();
    echo '<br>';
    print_r($Sushi);

    class Animal {
      public $name; // nameプロパティ
      public $height; // heightプロパティ
      public $weight; // weightプロパティ
      
      // 「height」プロパティの値を出力する「show_height」メソッドを定義
      public function show_height() {
        echo $this -> height; 
      }

      // コンストラクタの定義
      public function __construct(string $name, int $height, int $weight) {
        $this -> name = $name;
        $this -> height = $height;
        $this -> weight = $weight;
      }
    }

    // インスタンス化
    $Dog = new Animal("犬",100,100);
    $Dog -> show_height();
    echo'<br>';
    print_r($Dog);





