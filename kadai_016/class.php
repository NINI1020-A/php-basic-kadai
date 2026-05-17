<!--======== localhost/kadai_011/foreach.php ========-->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food
        {
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name,int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }

            // メソッドを定義する
            public function show_price()
            {
                echo $this->price."<br>";
            }
        }

        class Animal
        {
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name,int $height,int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッドを定義する
            public function show_height()
            {
                echo $this->height."<br>";
            }
        }

        $food = new Food("potato",200);
        $animal = new Animal("potato",200,500);
        print_r($food);
        echo "<br>";
        print_r($animal);
        echo "<br>";
        $food->show_price();
        $animal->show_height();
        ?>
    </p>
</body>

</html>

