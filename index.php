<?php 

require_once __DIR__ .'/partial/head.php';
require_once __DIR__ .'/partial/header.php';


require_once __DIR__. '/class/products/PetBed.php';
require_once __DIR__. '/class/products/PetFood.php';
require_once __DIR__. '/class/products/PetGame.php';
require_once __DIR__. '/class/users/User.php';

require_once __DIR__. '/data/db-shop.php';
require_once __DIR__. '/class/users/Customer.php';


$users =[];


$Marco = new User('Marco', 'Demarchi', 'marcodemarchi@gmail.com');
$Silvana = new User('Silvana', 'Desilvani', 'silvanade@hotmail.com');

$Mariolino =new Customer('Mariolino', 'De Mariolini', 'Mariolino@gmail.com');
$Mariolino->setCard('Maiolino', 1234123412341234, 2023, 8, '002');
// var_dump($Marco);
$Mariolino->setCart($frontline,$frontline);
$Mariolino->setFullAddress('via Mariolina',10,'MarioliniTown', 'CountryMariolin', 10);
$Mariolino->createOrder();

$users [] = $Marco;
$users [] = $Silvana;




?>

<main class="text-center">
  <h2 class="mt-3">Prodoti:</h2>
  <div class="container-fluid debug d-flex my-5 mx-3 d-flex justify-content-center">
    <?php foreach($products as $product): ?>

      <div class="product debug m-2 p-3 d-flex flex-column justify-content-between">

      <div>

        <h3><?php echo $product->getName() ?></h3>
        <h4><?php echo $product->getBrand() ?></h4>
        <h5>Price: <?php echo $product->getPrice() ?></h5>
        <p>per <?php echo $product->getGenre() ?></p>
      </div>

        <button type="button" class="btn btn-warning">acquista</button>
      </div>

    <?php endforeach; ?>
  </div>
  
  <div class="container debug">
    <div class="row">
      <!-- col Users -->
      <div class="col-4 debug">
        <h2>Users:</h2>
        <?php foreach($users as $user):?>
          <div class="col-box mb-3 p-3">

            <h5>Nome: <?php echo $user->getName() ?></h5>
            <h5>Cognome:<?php echo $user->getSurname() ?></h5>
            <h5>Email: <?php echo $user->getEmail() ?></h5>

          </div>
          <?php endforeach; ?>
      </div>
      <!-- col Customers -->
      <div class="col-4 debug">
        <h2>Customer</h2>

        <div class="col-box mb-3 p-3">
          <h5>Nome: <?php echo $Mariolino->getName() ?></h5>
          <h5>Cognome:<?php echo $Mariolino->getSurname() ?></h5>
          <h5>Email: <?php echo $Mariolino->getEmail() ?></h5> 
        </div>
        <div class="col-box mb-3 p-3">
          <h5>Indirizzo Customer:</h5>
          <h5><?php echo $Mariolino->getFullAddress() ?></h5>
        </div>

      </div>

      <!-- col Cart -->
      <div class="col-4 debug">
        <h2>Cart</h2>
        <div class="col-box mb-3 p-3">
          <h5><?php echo $Mariolino->getOrder() ?></h5>
        </div>
      </div>
    </div>
  </div>


  

  <?php
 
  ?>
</main>
<?php 

require_once __DIR__. '/partial/footer.php'

?>
