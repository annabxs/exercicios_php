<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Delícias da Dona Maria - Loja Online</title>
    <link href="src/estilos.css" rel="stylesheet">   
</head>

<body>

<header>
    🍰 Delícias da Dona Maria
</header>

<div class="container">
    <h2>Monte seu Pedido</h2>

    <form>

        <!-- SELECT 1 - Tipo de Produto -->
        <label for="tipo">O que deseja comprar?</label>
        <select id="tipo" name="tipo">
            <option value="">Selecione...</option>
            <option value="bolos">Bolos</option>
            <option value="salgados">Salgados</option>
            <option value="doces">Doces</option>
        </select>

        <!-- SELECT 2 - Opções do Produto -->
        <label for="opcao">Escolha o sabor / tipo:</label>
        <select id="opcao" name="opcao">
            <option value="">Selecione...</option>

            <!-- BOLOS -->
            <option value="chocolate">Bolo de Chocolate</option>
            <option value="cenoura">Bolo de Cenoura</option>
            <option value="prestigio">Bolo Prestígio</option>
            <option value="morango">Bolo de Morango</option>
            <option value="limao">Bolo de Limão</option>
            <option value="ninho">Bolo de Leite Ninho</option>

            <!-- SALGADOS -->
            <option value="coxinha">Coxinha</option>
            <option value="kibe">Kibe</option>
            <option value="risoles">Risoles</option>
            <option value="bolinha_queijo">Bolinha de Queijo</option>
            <option value="enroladinho">Enroladinho de Salsicha</option>

            <!-- DOCES -->
            <option value="brigadeiro">Brigadeiro</option>
            <option value="beijinho">Beijinho</option>
            <option value="cajuzinho">Cajuzinho</option>
            <option value="camafeu">Camafeu</option>
        </select>

        <!-- SELECT 3 - Quantidade -->
        <label for="quantidade">Quantidade:</label>
        <select id="quantidade" name="quantidade">
            <option value="">Selecione...</option>

            <!-- QUANTIDADE EM KG (para bolos) -->
            <option value="1kg">1 Kg</option>
            <option value="2kg">2 Kg</option>
            <option value="3kg">3 Kg</option>
            <option value="4kg">4 Kg</option>
            <option value="5kg">5 Kg</option>

            <!-- QUANTIDADE EM UNIDADES (para salgados e doces) -->
            <option value="50">50 unidades</option>
            <option value="100">100 unidades</option>
            <option value="200">200 unidades</option>
            <option value="300">300 unidades</option>
            <option value="400">400 unidades</option>
            <option value="500">500 unidades</option>
        </select>

    </form>
</div>

<div class="footer">
    Desenvolvido para aula de PHP - Etec Professor Basilides de godoy.
</div>

</body>
</html>


<?php
$categorias = [
    "bolos" => "Bolos",
    "salgados" => "Salgados",
    "doces" => "Doces"
];

$sabor = [
    "bolos" => ["Bolo de Chocolate", "Bolo de Cenoura", "Bolo de Prestígio", "Bolo de Morango", "Bolo de Limão", "Bolo de Ninho"],
    "salgados" => ["Coxinha", "Kibe", "Risoles", "Bolinha de Queijo", "Enroladinho"],
    "doces" => ["Brigadeiro", "Beijinho", "Cajuzinho", "Camafeu"]
];

$quantidade_bolos = [
    1,2,3,4,5
];

$quantidades_unidades = [
    50,100,200,300,400,500
]

?>