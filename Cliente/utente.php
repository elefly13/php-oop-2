<?php 




class Utente {

    public $email;
    public $nome;
    public $cognome;
    public $password;


    function __construct($_email, $_nome, $_cognome, $_password)
    {
        $this->email = $_email;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->password = $_password;
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

   

}

?>