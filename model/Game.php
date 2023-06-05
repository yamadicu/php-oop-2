<?php
require_once __DIR__ . '/Products.php';

class Game extends Products{
    protected $genere;

    public function __construct( $_name, $_price, $_image, Category $_category, $is_variable = true , $_quantity = 10 ){

        parent::__construct( $_name, $_price, $_image, $_category, $is_variable, $_quantity );

    }

    public function setGenere(){
        return $this->genere;
    }

    public function getGenere($_genere){
        return $this->genere = $_genere;
    }


}

?>