<?php 
require_once 'Traits/traits.php';
 class Piante {

    use DescrizioneArticolo;

     public $nome;
     public $dimensione;
     public $prezzo;

     function __construct( $_nome, $_dimensione, $_prezzo)
     {
         $this->nome = $_nome;
         $this->dimensione = $_dimensione;
         $this->prezzo = $_prezzo;
         
     }
     
     function setNomePianta($_nome)
    {
        $this->nome = $_nome;
    }
    function getNomePianta()
    {
        return $this->nome;
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