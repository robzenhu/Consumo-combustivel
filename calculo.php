<?php

$distancia = $_POST['distancia'];
$autonomia = $_POST['autonomia'];

$valorGasolina = 6.40;
$valorAlcool = 5.43;
$valorDiesel = 5.20;
$valorGasNatural = 4.17;

$calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
$calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
$calculoDiesel = ($distancia / $autonomia) * $valorDiesel;
$calculoGasNatural = ($distancia / $autonomia) * $valorGasNatural;

echo "<P>O valor do consumo em R$ para Gasolina foi : R$ ".$calculoGasolina."</p>";
echo "<P>O valor do consumo em R$ para Alcool foi : R$ ".$calculoAlcool."</p>";
echo "<P>O valor do consumo em R$ para Diesel foi : R$ ".$calculoDiesel."</p>";
echo "<P>O valor do consumo em R$ para Gasolina foi : R$ ".$calculoGasNatural."</p>";