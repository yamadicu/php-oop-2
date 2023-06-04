<?php
class Products extends Shop{
    public $prodotto; //cibo, giochi, cuccie, ecc.
    public $immagine; //immagine del prodotto
    public function __costruct($_prodotto, $_immagine){
        parent::__costruct($_animale, $_prezzo);
        $this->prodotto = $_prodotto;
        $this->immagine = $_immagine;
    }
}
?>