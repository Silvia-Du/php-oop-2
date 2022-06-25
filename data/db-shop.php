<?php

$products =[];

$wilderness = new PetFood('Wilderness', 61.79, 'Real Naure', 'cani', 'carne essiccata, aroma naturale', 'adult', 12 , 'crocchette naturali per cani senza additivi', 2022-12-11 );
$tunnel = new PetGame('Gioco Tunnel', 11.99, 'Ani One', 'gatti', 'acrilico, sintetico', 'china', 'non riporre in lavatrice o asciugatrice');
$frontline = new Product('Front Line combo Gatti', 19.99, 'Frontline', 'Gatti');



$products [] = $wilderness;
$products [] = $tunnel;
$products [] = $frontline;


// Qui creo Utenti, clienti & carrello con acquisto





?>