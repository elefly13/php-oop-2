<?php 
require_once 'Cliente/utente.php';
require_once 'Cliente/Indirizzo-utente.php';
require_once 'Cliente/carta.php';
require_once 'Prodotti/Composizioni.php';
require_once 'Prodotti/Piante.php';




$cliente1 = new Utente('Anna@gmail.com', 'Anna', 'Rossi','F45UX', 'true', 10);
$cliente2 = new Utente('Pino@gmail.com', 'Pino', 'Verdi','5TYU8', 'true', 10);
$cliente3 = new Utente('Ugo@gmail.com', 'Ugo', 'Neri','VFGY6', 'false', 0);
$cliente1 = new IndirizzoUtente('Saluzzo', 5, 10136, 'Torino', 'Italia', 'Anna@gmail.com', 'Anna', 'Rossi','F45UX', 'si');
$cliente2 = new IndirizzoUtente('Umberto', 98, 27426, 'Genova', 'Italia', 'Pino@gmail.com', 'Pino', 'Verdi','5TYU8', 'si');
$cliente3 = new IndirizzoUtente('Trapani', 127, 45136, 'Roma', 'Italia', 'Ugo@gmail.com', 'Ugo', 'Neri','VFGY6', 'no');

var_dump($cliente3);
echo $cliente3->getIndirizzo();

$composizione1 = new Composizioni('Rose e Viole', 'Grande', 58);
$composizione2 = new Composizioni('Gerbere e Margherite', 'Medio', 37);
$composizione3 = new Composizioni('Girasoli e Spighe di grano', 'Grande', 63);

$nomePianta1 = new Piante('Ficus', 'Grande', 126);
$nomePianta2 = new Piante('Orchidea', 'Piccola', 35);
$nomePianta3 = new Piante('Edera', 'Media', 50);

// var_dump($composizione3);
echo $nomePianta2->getDescrizioneArticolo() . '<br/>';
echo $composizione3->getDescrizioneArticolo();


echo $cliente1->getSconto();
$cliente1->setSconto(true);
echo $cliente1->getSconto();

$cliente4 = new Carta(1234567891234567, 2-23, 234);

var_dump($cliente4);

// controllo sul numero di carta 
try{

    echo $cliente4->setNumeroCard(1234567894567); 

} catch(Exception $e) {

    echo 'Attenzione, ' . $e->getMessage() . '<br/>';

}
// controllo sulla data di scadenza 
try{

    echo $cliente4->setDataScadenza(2-23); 

} catch(Exception $e) {

    echo 'Attenzione, ' . $e->getMessage();

}



echo $oggi->idate("m-y");

?>