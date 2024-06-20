<?php

class Veículos {
    // ATRIBUTOS

    public $none;

    public $marca;

    public $modelo;
    

    //função construtor

    public function __construct($none, $marca, $modelo) {
    
} 

// função acelerar

    public function acelerar () {
         echo "Acelerado";
    }
    }
    
    class moto extends Veículos {
        public $tamanho;

        public $velocidade;


        public function ligar() {
            echo "ligando";
        }
    }

    class carro extends Veículos {

        public $cor;

        public $quilometragem;

    

        public function dirigir() {
            echo "dirigindo";
        }
    }
    


    // instanciar
    $moto1 = new Moto ("HyperSport.", "Suzuky","Hayabusa");
    $carro1 = new Carro ("civiccg10","honda","sedan");

    $moto -> dirigir();
    echo $moto1->acelerar ();
    echo $moto1->$cor ;
    echo $moto1->$quilometragem;


?>