<?php

if ($_POST){
    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];

    if (is_numeric($distancia) && is_numeric($autonomia)){
        if ($distancia >0 && $autonomia>0 ){
            $valorGasolina = 6.40;
            $valorAlcool = 5.43;
            $valorDiesel = 5.20;
            $valorGasNatural = 4.17;
        
            $calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
            $calculoGasolina = number_format($calculoGasolina,2,',','.');
            $calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
            $calculoAlcool = number_format($calculoAlcool,2,',','.');
            $calculoDiesel = ($distancia / $autonomia) * $valorDiesel;
            $calculoDiesel = number_format($calculoDiesel, 2,',','.');
            $calculoGasNatural = ($distancia / $autonomia) * $valorGasNatural;
            $calculoGasNatural = number_format($calculoGasNatural,2,',','.');
        
            echo "<P>O valor do consumo em R$ para Gasolina foi : R$ ".$calculoGasolina."</p>";
            echo "<P>O valor do consumo em R$ para Alcool foi : R$ ".$calculoAlcool."</p>";
            echo "<P>O valor do consumo em R$ para Diesel foi : R$ ".$calculoDiesel."</p>";
            echo "<P>O valor do consumo em R$ para Gasolina foi : R$ ".$calculoGasNatural."</p>";
            
        }else{
            echo"<p> O valor da distância e da autonomia deve ser maior que zero!<p>";
        }
 
    }else{
        echo"<p>O valor recebido nao é numerico.</P>";
    }

}else {
    echo "<p>Erro ao receber informações do formulário!<p>";
}
