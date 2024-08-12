<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai016</title>
</head>

<body>
<p>
        <?php
        // Foodクラスの定義
        class Food {
            private $name;
            private $price;

            // コンストラクタ
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // priceプロパティを出力するメソッド
            public function show_price() {
                echo $this->price . "<br>";
            }

            // オブジェクトの内容を出力するメソッド
            public function __toString() {
                return "Food Object([name:Food:private] => {$this->name} [price:Food:private] => {$this->price})";
            }
        }

        // Animalクラスの定義
        class Animal {
            private $name;
            private $height;
            private $weight;

            // コンストラクタ
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // heightプロパティを出力するメソッド
            public function show_height() {
                echo $this->height . "<br>";
            }

            // オブジェクトの内容を出力するメソッド
            public function __toString() {
                return "Animal Object([name:Animal:private] => {$this->name} [height:Animal:private] => {$this->height} [weight:Animal:private] => {$this->weight})";
            }
        }

        // Foodクラスのインスタンスを作成
        $potate = new Food("potate", 250);

        // Animalクラスのインスタンスを作成
        $dog = new Animal("dog", 60, 5000);

        // インスタンスを出力
        echo "<pre>";
        print_r($potate);
        print_r($dog);
        echo "</pre>";

        // メソッドを実行して値を出力
        $potate->show_price();
        $dog->show_height();
        ?>
    </p>
</body>

</html>