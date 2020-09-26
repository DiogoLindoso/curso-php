<h1>Estudo OO</h1>

<?php

include 'Carro.php';

ini_set('display_errors', '1');

$carro = new Carro();
$carro->setModelo('Onix');
$carro->setAno('2020');
$carro->setMarca('Chevrolet');
$carro->setCor('Azul');

$carro2 = new Carro();
$carro2->setModelo('Celta');
$carro2->setAno('2015');
$carro2->setMarca('Chevrolet');
$carro2->setCor('Preto');

$carro->obtemDados();
echo'<br>';
$carro2->obtemDados();
?>