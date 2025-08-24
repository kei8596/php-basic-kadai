<?php

class Food {
    private $name;
    private $price;

     private function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
    }


    private function show_price(int $price) {
    echo $this->price . '<br>';
}

}
    $food = new Food('potato', 250);

    print_r($food);
    
    
    $food->show_price();
  

?>

<?php

class Animal {
    private $name;
    private $height;
    private $weight;

    private function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
                
            }

     private function show_height(int $height) {
        echo $this->height . '<br>';
}

}

      $animal = new Animal('dog', 60, 5000);

       print_r($animal);

      $animal->show_height();
      
      
      
      
      echo $food->price .'<br>';
      echo $animal->height;


?>

