<?php 
require_once 'Indirizzo-utente.php';



class Utente {

    public $email;
    public $nome;
    public $cognome;
    public $password;
    public $premium;


    function __construct($_email, $_nome, $_cognome, $_password, $_premium)
    {
        $this->email = $_email;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->password = $_password;
        $this->premium = $_premium;
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

   

}

?>