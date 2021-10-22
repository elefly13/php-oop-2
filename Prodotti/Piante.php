<?php 
 class Piante {
     public $nomePianta;
     public $dimensione;
     public $prezzo;

     function __construct( $_nomePianta, $_dimensione, $_prezzo)
     {
         $this->nomePianta = $_nomePianta;
         $this->dimensione = $_dimensione;
         $this->prezzo = $_prezzo;
         
     }
     
     function setNomePianta($_nomePianta)
    {
        $this->nomePianta = $_nomePianta;
    }
    function getNomePianta()
    {
        return $this->nomePianta;
    }

    function setDimensione($_dimensione)
    {
        $this->dimensione = $_dimensione;
    }
    function getDimensione()
    {
        return $this->dimensione;
    }

    function setPrezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;
    }
    function getPrezzo()
    {
        return $this->prezzo;
    }
 }
?>