<?php 

require_once __DIR__ .'/partial/head.php';
require_once __DIR__ .'/partial/header.php';


require_once __DIR__. '/class/products/PetBed.php';
require_once __DIR__. '/class/products/PetFood.php';
require_once __DIR__. '/class/products/PetGame.php';
require_once __DIR__. '/class/users/User.php';

require_once __DIR__. '/data/db-shop.php';
require_once __DIR__. '/class/users/Customer.php';


?>

<main>
  <div class="container debug">
    <?php foreach($products as $product): ?>

      <div class="product debug my-2 p-3">
        <h4><?php echo $product->getName() ?></h4>
        <p><?php echo $product->getBrand() ?></p>
        <p><?php echo $product->getPrice() ?></p>
        <p><?php echo $product->getGenre() ?></p>
      </div>

    <?php endforeach; ?>

  </div>

  <?php
  $ugo = new User('Ugo', 'Deughi', 'ugodeughi@gmail.com');
  $silvana = new User('Silvana', 'Desilvani', 'silvanade@hotmail.com');

  $Mariolino =new Customer('Mariolino', 'De Mariolini', 'Mariolino@gmail.com');
  $Mariolino->setCard('Maiolino', 1234123412341234, 2023, 8, '002');
  var_dump($Mariolino);
  die('fine');
  $Mariolino->setCart($frontline,$frontline);
  $Mariolino->setFullAddress('via Mariolina',10,'MarioliniTown', 'CountryMariolin', 10);
  $Mariolino->createOrder();
  ?>
</main>
<?php 

require_once __DIR__. '/partial/footer.php'

?>
