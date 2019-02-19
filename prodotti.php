<!-- crea e modellizza classi per gestire i prodotti di un magazzino -->

<?php

class Prodotto {

  public $nomeProdotto;
  public $brandProdotto;
  public $categoriamerce;
  public $quantita;
  public $quantitaVendute;


  function __construct($categoriamerce){

        $this->categoria = $categoriamerce;
  }

  public function rimanenze(){
    $rimanenze = $this->quantita - $this->quantitaVendute;
    return $rimanenze;
  }

}

 ?>
