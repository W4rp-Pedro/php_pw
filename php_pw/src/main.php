<?php

include_once __DIR__ . '/../vendor/autoload.php';


use App\model\Personagem;

$adc = new Personagem("Thor", "Guerreiro", 6);


echo $adc->nome . "<br>";

echo $adc->arquetipo . "<br>";

echo $adc->level . "<br>";



$adc = new Personagem("Marius", "Monge", 8);


echo $adc->nome . "<br>";

echo $adc->arquetipo . "<br>";

echo $adc->level . "<br>";
?>
