<?php
// クラスを定義する
class Food {
    public $name;
    public $price;

     public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
    }


    public function show_price(int $price) {
    echo $this->price . '<br>';
}

}
    $food = new Food('potato', 250);

    print_r($food);
    
    
    $food->show_price(250);
  

?>

<?php

class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
                
            }

     public function show_height(int $height) {
        echo $this->height . '<br>';
}

}

      $animal = new Animal('dog', 60, 5000);

       print_r($animal);

      $animal->show_height(60);
      
      
      
      
      echo $food->price .'<br>';
      echo $animal->height;


?>

