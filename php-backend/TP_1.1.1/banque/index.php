<?php 
require_once __DIR__ . '/vendor/autoload.php';   // un seul require pour toutes les classes 
use Banque\Compte; 
$compte = new Compte("C001", "Ali", 1000); 
$compte->deposer(500); 
$compte->retirer(200); 
echo $compte->afficher() . PHP_EOL;