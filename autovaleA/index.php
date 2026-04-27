<?php
    include "dados.php";
    $categoriaSelecionada = $_POST['categoria'] ?? "";
?>
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
            
            <!-- $_POST['categoria'] → pega o valor enviado pelo formulário
                ● ?? "" → se nada foi enviado, usa uma string vazia
                ● Isso evita erros e deixa o código mais seguro.-->
            <!-- SELECT 1 - Categoria -->
            <label for="categoria">Categoria:</label>
            <select id="categoria" name = "categoria">
                <option value="">Selecione...</option>
                <?php foreach ($categorias as $key => $value): ?>
                    <option value="<?= $key ?>"> <?= $value ?></option>
                <?php endforeach;?> 
            </select>
            <!-- SELECT 2 - Marca -->
            <?php if($categoriaSelecionada && isset($subcategorias[$categoriaSelecionada])): ?>
                <!-- $categoriaSelecionada ==> ● Se estiver vazia → FALSE ● Se tiver algum valor → TRUE -->
                <!-- isset ==> Se tiver algum valor selecionado... -->
                <label for="subcategorias">Marca:</label>
                <select id="subcategoria" name = "subcategorias" onchange="this.form.submit()">
                    <option value="">Selecione...</option>
                    
                        <?php foreach ($subcategorias[$categoriaSelecionada] as $marca): ?>
                            <option value="<?= $marca ?>"> <?= $marca ?> <?= $marca ?></option>
                        <?php endforeach;?> 
                </select>
            <?php endif; ?>
        </form>

    </div>
</div>

<?php





// <!-- SELECT 3 - Modelos (estático por enquanto) -->
//             <label for="modelo">Modelos disponíveis:</label>
//             <select id="modelo">
//                 <option value="">Selecione...</option>
//                 <option value="Modelo A">Modelo A</option>
//                 <option value="Modelo B">Modelo B</option>
?>

</body>
</html>
