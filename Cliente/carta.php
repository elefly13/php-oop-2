<?php

class Carta extends IndirizzoUtente {
    
    public $numeroCard;
    protected $dataScadenza;
    protected $numCvv;

    function __construct($_numeroCard, $_dataScadenza, $_numCvv)
    {
        $this->numeroCard = $_numeroCard;
        $this->dataScadenza = $_dataScadenza;
        $this->numCvv = $_numCvv;

    }

    function setNumeroCard($_numeroCard)
    {
        if ( $this->numeroCard_lenght == 16 ) {
            $this->numeroCard = $_numeroCard; 
        } else {
            throw new Exception( 'Il numero inserito deve avere 16 valori');
        }
        
    }

    function getCard()
    {
        return $this->numeroCard;
    }

    function setDataScadenza($_dataScadenza)
    {
        $oggi = date("m-y");
        if($this->$oggi > $this->dataScadenza) {
           
            $this->dataScadenza = $_dataScadenza;

        } else {
            throw new Exception( 'La tua carta è scaduta');
        }
        
    }

    function getDataScadenza()
    {
        return $this->dataScadenza;
    }

    function setNumCvv($_numCvv)
    {
        $this->numCvv = $_numCvv;
    }

    function getNumCvv()
    {
        return $this->numCvv;
    }

}
?>