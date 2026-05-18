<?php
    include "dados.php"; //Funciona apenas no php; Chama o array do dados.php
    // Nova variável que pega as informações selecionadas pelo usuário.
    $categoriaSelecionada = $_POST['categoria'] ?? "";
    $categoriaSelecionada1 = $_POST['subcategorias'] ?? ""; 
    $veiculoSelecionado = $_POST['modelos'] ?? "";
?>
                <!-- $_POST['categoria'] → pega o valor enviado pelo formulário
                ● ?? "" → se nada foi enviado, usa uma string vazia
                ● Isso evita erros e deixa o código mais seguro.-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>AutoVale Poços - Seleção de Veículos</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="">
    
</head>
<body>

<header>
    <h1>AutoVale Poços</h1>
    <p>Qualidade e confiança em Poços de Caldas</p>
</header>

<div class="container">
    <div class="box">
        <h2>Escolha seu veículo</h2>

        <form  method="post">
            
            
            <!-- SELECT 1 - Categoria -->
             <!-- Texto que vai aparecer para o usuário -->
            <label for="categoria">Categoria:</label>
            <!--  Select → Utilizado para nomear e selecionar a label (também utilizado ao usuário clicar na label).  -->
             <!--  onchange="this.form.submit()" → função que envia o formulário (resposta) do usuário para o servidor do php. Recarrega a página. Ou seja, sempre que você altera algo no código ele muda todos os itens, recarrega a página para que as duas funcionem. -->
            <select id="categoria" name ="categoria" onchange="this.form.submit()"> 
                <!-- // para cada item do array, jogue o item($key) como valor ($value), ou seja, o que o usuário vê -->
                <option value="">Selecione...</option> 
                <?php foreach ($categorias as $key => $value): ?> 
                <option value="<?= $key ?>" <?= ($categoriaSelecionada === $key) ? "selected":""?>> <?= $value ?></option>
                <?php endforeach;?> 
            </select>



            <!-- SELECT 2 - Marca -->
             <!-- ?= - representa as chavez -->
            <?php if($categoriaSelecionada && isset($subcategorias[$categoriaSelecionada])): ?>
                <!-- $categoriaSelecionada ==> ● Se estiver vazia → FALSE 
                 ● Se tiver algum valor → TRUE -->
                <!-- isset ==> Se tiver algum valor selecionado... -->
                <label for="subcategorias">Marca:</label>
                <select id="subcategorias" name = "subcategorias" onchange="this.form.submit()">
                    <option value="">Selecione...</option>
                    
                        <?php foreach ($subcategorias[$categoriaSelecionada] as $marca): ?>
                            <!-- ?= -> substitui o echo. Option -> pega a informação -->
                            <option value="<?= $marca ?>" <?= ($categoriaSelecionada1 === $marca) ? "selected":""?>> <?= $marca ?></option> 
                        <?php endforeach;?> 
                </select>
            <?php endif; ?>


            <!-- SELECT 3 - Modelo -->
             <?php if($categoriaSelecionada1 && isset($modelos[$categoriaSelecionada1])): ?>
                <label for="modelos">Modelos: </label>
                <select name="modelos" id="modelos"  onchange="this.form.submit()">
                    <option value="">Selecione...</option>

                    <?php foreach($modelos[$categoriaSelecionada1] as $subcategorias):?>
                        <option value="<?= $subcategorias ?>" <?= ($veiculoSelecionado  === $subcategorias) ? "selected":""?>> <?= $subcategorias ?></option>
                    <?php endforeach;?>
                </select>
            <?php endif; ?>
        </form>

        <!-- INFORMAÇÕES DO VEÍCULO SELECIONADO -->
         <?php
         if ($veiculoSelecionado && isset($veiculos[$categoriaSelecionada1])) {
            
            foreach ($veiculos[$categoriaSelecionada1] as $carro) {
                if ($carro["modelo"] === $veiculoSelecionado && $carro["categoria"] === $categoriaSelecionada){
                ?>     
                <div class="info-veiculo">
                    <h3>Informações do Veículo</h3>
                    <p><strong>Categoria:</strong> <?= $categorias[$carro["categoria"]]?></p>
                    <p><strong>Marca:</strong> <?= $categoriaSelecionada1 ?></p>
                    <p><strong>Modelo:</strong> <?= $carro["modelo"]?></p>
                    <p><strong>Ano:</strong> <?= $carro["ano"]?></p>
                    <p><strong>Preço:</strong> R$ <?= number_format($carro["preco"],2,",", ".") ?></p>
                    <p><strong>Cor:</strong> <?= $carro["cor"]?> </p>    
                </div>
                <?php
                }
            }
         }
         ?>               
    </div>
</div>

</body>
</html>
