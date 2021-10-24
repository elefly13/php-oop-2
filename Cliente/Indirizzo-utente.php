<?php
require_once 'utente.php';
require_once 'Traits/traits.php';

class IndirizzoUtente extends Utente {

    use Indirizzo;

    public $nomeStrada;
    public $numeroStrada;
    public $cap;
    public $citta;
    public $paese;

    function __construct( $_nomeStrada, $_numeroStrada, $_cap, $_citta, $_paese,$_email, $_nome, $_cognome, $_password, $_premium) {

        $this->nomeStrada = $_nomeStrada;
        $this->numeroStrada = $_numeroStrada;
        $this->cap = $_cap;
        $this->citta = $_citta;
        $this->paese = $_paese;

        $this->email = $_email;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->password = $_password;
        $this->premium = $_premium;

    }

    function setNomeStrada($_nomeStrada)
    {
        $this->nomeStrada = $_nomeStrada;
    }
    function getNomeStrada()
    {
        return $this->nomeStrada;
    }

    function setNumeroStrada($_numeroStrada)
    {
        $this->numeroStrada = $_numeroStrada;
    }
    function getNumeroStrada()
    {
        return $this->numeroStrada;
    }

    function setCap($_cap)
    {
        $this->cap = $_cap;
    }
    function getCap()
    {
        return $this->cap;
    }

    function setCitta($_citta)
    {
        $this->citta = $_citta;
    }
    function getCitta()
    {
        return $this->citta;
    }

    function setPaese($_paese)
    {
        $this->paese = $_paese;
    }
    function getPaese()
    {
        return $this->paese;
    }


    
}

?>