<?php 
class Product {
    private $item_name = '';
    private $item_price = "";

    public function __construct(){
        $args = func_get_args();
        $num  = func_num_args();
        $func = "__construct_".$num;

        if(method_exists($this, $func)){
            call_user_func_array(array($this, $func), $args);
        }
    }

    public function __construct_1($name){
        $this->item_name = $name; 
    }

    public function __construct_2($name, $price){
        $this->item_name = $name; 
        $this->item_price = $price; 
    }

    public function setName($name){
        $this->item_name = $name; 
    }

    public function setPrice($price){
        $this->item_price = $price; 
    }

    public function showInfo(){
        echo "Item Name: {$this->item_name} \n";
        echo "Item price: {$this->item_price} \n";
    }
}

$obj1 = new Product('Transcend 16GB', 3500);
echo $obj1->showInfo();