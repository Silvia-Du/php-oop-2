<?php 

/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
*/

//1- creo classe principale, per i prodotti FATTO

//creo sottoclasse per il singolo type
//Quindi creo la correlazione
//li importo nell' index e provo ad inizializzare di prodotti

require_once __DIR__ .'/partial/head.php';
require_once __DIR__ .'/partial/header.php';

require_once __DIR__. '/class/Products.php';
require_once __DIR__. '/class/PetGame.php';
require_once __DIR__. '/class/PetBeds.php';
require_once __DIR__. '/class/PetFood.php';

$cuciiaMaxi = new Product('cuccia Maxi', 50, 'Faber Cucce', 'cuccia per cani');

var_dump($cuciiaMaxi);

?>

<main>
  <div class="container debug">M</div>
</main>

<?php 

require_once __DIR__. '/partial/footer.php'

?>
