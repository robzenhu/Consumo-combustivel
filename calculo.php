<?php

$distancia = $_POST['distancia'];
$autonomia = $_POST['autonomia'];

$valorGasolina= 6,40;
$valorAlcool = 5,43;
$valorDisel = 5,20;
$valorGasNatural= 4.17;

$calculaoGasolina = ($distancia/$autonomia)*$valorGasolina;
$calculaoAlcool = ($distancia/$autonomia)*$valorAlcool;
$calculaoDisel = ($distancia/$autonomia)*$valorDisel;
$calculaoGasNatural = ($distancia/$autonomia)*$valorGasNatural;