<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Consumo de Combustivel</title>
</head>  
<body>
    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class= "conteudo-painel">
                <p>Esta aplicação tem como finalidade demonstrar os valores que
					serão gastos com combustível durante uma viagem, com base no
				consumo do seu veículo, e com a distância determinada por você!</p>
				<p>Os combustíveis disponíveis para este cálculo são:</p>
                <ul>
                    <li>Gasolina</li>
                    <li>Álcool</li>
                    <li>Diesel</li>
                    <li>Gás Natural</li>
                </ul>
            </div>
        </div>
        <div class="painel">
            <h2>Calculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="calculo.php" method="post">
                    <label for="distancia"> Distância em Quilômentros a ser percorridas</label>
                    <input type="number" class="campoTexto" name="distancia" required/>

                    <label for="autonomia"> Consumo de Combustivel di veículo (km/l)</label>
                    <input type="number" class="campoTexto" name="autonomia" required/>

                    <button class="botao" type="subimit"> Calcular</button>
                </form>
            </div>
        </div>
    </main>      



    
</body>
</html>