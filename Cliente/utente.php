<?php 
require_once 'Indirizzo-utente.php';



class Utente {

    public $email;
    public $nome;
    public $cognome;
    public $password;
    protected $premium = true;
    public $sconto = 0;


    function __construct($_email, $_nome, $_cognome, $_password, $_premium, $_sconto)
    {
        $this->email = $_email;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->password = $_password;
        $this->premium = $_premium;
        $this->sconto = $_sconto;
    }

    function setEmail($_email)
    {
        $this->email = $_email;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setNome($_nome)
    {
        $this->nome = $_nome;
    }
    
    function getNome()
    {
        return $this->nome;
    }

    function setCognome($_cognome)
    {
        $this->cognome = $_cognome;
    }
    
    function getCognome()
    {
        return $this->cognome;
    }

    function setPassword($_password)
    {
        $this->password = $_password;
    }

    function getPassword()
    {
        return $this->password;
    }

    function setPremium($_premium)
    {
        $this->premium = $_premium;
    }

    function getPremium()
    {
        return $this->premium;
    }

    function setSconto($premium) {

        if($premium == true) {
            $this->sconto = 10;
        }
    }
    function getSconto() {

        return $this->sconto;
    }

   
   
}

?>