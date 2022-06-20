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


require_once __DIR__ .'/partial/head.php';
require_once __DIR__ .'/partial/header.php';


require_once __DIR__. '/class/products/PetBed.php';
require_once __DIR__. '/class/products/PetFood.php';
require_once __DIR__. '/class/products/PetGame.php';

require_once __DIR__. '/data/db-shop.php';

?>

<main>
  <div class="container debug">M</div>
</main>

<?php 

require_once __DIR__. '/partial/footer.php'

?>
