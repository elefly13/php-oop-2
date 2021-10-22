<?php 
 class Composizioni {
     public $tipoFiori;
     public $dimensione;
     public $prezzo;

     function __construct( $_tipoFiori, $_dimensione, $_prezzo)
     {
         $this->tipoFiori = $_tipoFiori;
         $this->dimensione = $_dimensione;
         $this->prezzo = $_prezzo;
         
     }
     
     function setTipoFiori($_tipoFiori)
    {
        $this->tipoFiori = $_tipoFiori;
    }
    function getTipoFiori()
    {
        return $this->tipoFiori;
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