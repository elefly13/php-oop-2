<?php 
require_once 'Cliente/utente.php';
require_once 'Cliente/Indirizzo-utente.php';
require_once 'Prodotti/Composizioni.php';
require_once 'Prodotti/Piante.php';




$cliente1 = new Utente('Anna@gmail.com', 'Anna', 'Rossi','F45UX');
$cliente2 = new Utente('Pino@gmail.com', 'Pino', 'Verdi','5TYU8');
$cliente3 = new Utente('Ugo@gmail.com', 'Ugo', 'Neri','VFGY6');
$cliente1 = new IndirizzoUtente('Saluzzo', 5, 10136, 'Torino', 'Italia');
$cliente2 = new IndirizzoUtente('Umberto', 98, 27426, 'Genova', 'Italia');
$cliente3 = new IndirizzoUtente('Trapani', 127, 45136, 'Roma', 'Italia');

$composizione1 = new Composizioni('Rose e Viole', 'Grande', 58);
$composizione2 = new Composizioni('Gerbere e Margherite', 'Medio', 37);
$composizione3 = new Composizioni('Girasoli e Spighe di grano', 'Grande', 63);

$nomePianta1 = new Piante('Ficus', 'Grande', 126);
$nomePianta2 = new Piante('Orchidea', 'Piccola', 35);
$nomePianta3 = new Piante('Edera', 'Media', 50);


var_dump($cliente3);
echo $cliente1->getIndirizzo();

?>