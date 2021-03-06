<?php
trait Indirizzo {
    public $nomeStrada;
    public $numeroStrada;
    public $cap;
    public $citta;
    public $paese;

    function getIndirizzo() {
        return 'Via/Corso ' . $this->nomeStrada . ' ' . 'N.' . $this->numeroStrada . '<br/>'
                . 'CAP ' . $this->cap . '<br/>'
                . $this->citta . '<br/>'
                . $this->paese;
            
    }
}

trait DescrizioneArticolo {
    public $nome;
    public $dimensione;
    public $prezzo;

    function getDescrizioneArticolo() {
        return $this->nome . '<br/>' . $this->dimensione . '<br/>' . '€ ' . $this->prezzo;
    }
}


?>