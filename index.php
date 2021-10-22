<?php 
require_once 'Cliente/utente.php';
require_once 'Cliente/Indirizzo-utente.php';




$cliente1 = new Utente('Anna@gmail.com', 'Anna', 'Anna','F45UX');
$cliente2 = new IndirizzoUtente('Saluzzo', 5, 10136, 'Torino', 'Italia');
echo $cliente1->getEmail();
// echo $cliente2->getIndirizzo();
// var_dump($cliente1->getIndirizzo());
var_dump($cliente2);

?>