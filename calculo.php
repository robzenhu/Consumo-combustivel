<?php
$mensagem= '';
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
            $mensagem.="<div class='sucesso'>";
            $mensagem.="O valor total gasto será de:";
            $mensagem.="<ul>";
            $mensagem.="<li><b>Gasolina: R$ </b>".$calculoGasolina."</li>";
            $mensagem.="<li><b>Alcool: R$ </b>".$calculoAlcool."</li>";
            $mensagem.="<li><b>Diesel: R$ </b>".$calculoDiesel."</li>";
            $mensagem.="<li><b>GNV: R$ </b>".$calculoGasNatural."</li>";
            $mensagem.="</ul>";
            $mensagem.="</div>";

   
            
        }else{
            $mensagem.="<div class='erro'>";
            $mensagem.="<p> O valor da distância e da autonomia deve ser maior que zero!<p>";
            $mensagem.="</div>";
        }
 
    }else{
        $mensagem.="<div class='erro'>";
        $mensagem.="<p>O valor recebido nao é numerico.</P>";
        $mensagem.="</div>";
    }

}else {
    $mensagem.="<div class='erro'>";
    $mensagem.= "<p>Erro ao receber informações do formulário!<p>";
    $mensagem.="</div>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Resultado do cálculo de consumo</h2>
            <div class="conteudo-painel">
                <?php
                echo $mensagem;
                ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </div>
    </main> 
</body>
</html>