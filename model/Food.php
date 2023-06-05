<?php
require_once __DIR__ . '/Products.php';

class Food extends Products{

    protected $calories;

    public function __construct( $_name, $_price, $_image, Category $_category, $is_variable = true , $_quantity = 10 ){

        parent::__construct( $_name, $_price, $_image, $_category, $is_variable, $_quantity );

    }

    public function getCalories(){
        return $this->calories;
    }

    public function setCalories( $_calories ){
        return $this->calories = $_calories;
    }

}

?>