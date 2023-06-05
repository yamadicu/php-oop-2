<?php

class Products{
    public $name;
    public $price;
    public $image;
    public $is_variable;
    public $quantity;
    public $category;

    public function __construct( $_name, $_price, $_image, Category $_category, $is_variable = true , $_quantity = 10 ){
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
        $this->is_variable = $is_variable;
        $this->quantity = $_quantity;
    }

    public function getProductsDetail(){
        return " Products Name: $this->name, Price: $this->price, Quantity: $this->quantity ";
    }

    public function getCategoryIcon(){
        $icon = $this->category->icon;
        return "<i class='$icon'></i>";
    }

    public function getClassName(){
        return get_class();
    }

}

?>