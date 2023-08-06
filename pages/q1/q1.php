<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Projeto 2Tri - WebDev3</title>
    <link rel="icon" type="image/x-icon" href="../../favicon.ico">
</head>
<html>

<body>
    <header>
        <h2>Desenvolvimento Web</h2>
        <a href="../../index.php" class="home"> Home </a>
    </header>
    <h1>Trabalho: Questão 01</h1>
    <h1>Gerador de Elementos HTML e seus Códigos-fontes</h1>
    <form action="" method="get" id="formulario-questoes">
        <fieldset>
            <legend>Geração de elementos</legend>
            <label for="totalElementos">Total de elementos:</label>
            <input type="number" class="input-elementos" name="totalElementos" id="totalElementos" min="1" max="15" value="1">
            <span> (1 a 15)</span><br><br>

            <label for="texto">Texto</label>
            <input type="radio" id="texto" name="elemento" value="texto" onclick="document.getElementById('formulario-questoes').submit()"><br>

            <label for="senha">Senha</label>
            <input type="radio" id="senha" name="elemento" value="senha" onclick="document.getElementById('formulario-questoes').submit()"><br>

            <label for="botao">Botão</label>
            <input type="radio" id="botao" name="elemento" value="botao" onclick="document.getElementById('formulario-questoes').submit()"><br>

            <label for="radio">Radio</label>
            <input type="radio" id="radio" name="elemento" value="radio" onclick="document.getElementById('formulario-questoes').submit()"><br>

            <label for="caixaselecao">Caixa de seleção</label>
            <input type="radio" id="caixaselecao" name="elemento" value="caixaselecao" onclick="document.getElementById('formulario-questoes').submit()"><br>

            <label for="faixa">Faixa</label>
            <input type="radio" id="faixa" name="elemento" value="faixa" onclick="document.getElementById('formulario-questoes').submit()"><br>
        </fieldset>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $quantidade = isset($_GET["totalElementos"]) ? $_GET["totalElementos"] : 1;
        $elemento = isset($_GET["elemento"]) ? $_GET["elemento"] : "texto";

        echo "<h3>Exemplo do Elemento Gerado:</h3>";

        for ($i = 0; $i < $quantidade; $i++) {
            switch ($elemento) {
                case 'texto':
                    echo '<input type="text" placeholder="Texto aqui"><br>';
                    break;
                case 'senha':
                    echo '<input type="password" placeholder="Senha"><br>';
                    break;
                case 'botao':
                    echo '<button type="button">Clique aqui</button><br>';
                    break;
                case 'radio':
                    echo '<input type="radio" name="opcao" value="opcao' . $i . '">Opção ' . $i . '<br>';
                    break;
                case 'caixaselecao':
                    echo '<select><option value="opcao1">Opção 1</option><option value="opcao2">Opção 2</option></select><br>';
                    break;
                case 'faixa':
                    echo '<input type="range" min="0" max="100"><br>';
                    break;
            }
        }

        echo "<h3>Código-fonte gerado:</h3>";
        echo '<pre><code>';

        for ($i = 0; $i < $quantidade; $i++) {
            switch ($elemento) {
                case 'texto':
                    echo htmlspecialchars('<input type="text" placeholder="Texto aqui"><br>') . "\n";
                    break;
                case 'senha':
                    echo htmlspecialchars('<input type="password" placeholder="Senha"><br>') . "\n";
                    break;
                case 'botao':
                    echo htmlspecialchars('<button type="button">Clique aqui</button><br>') . "\n";
                    break;
                case 'radio':
                    echo htmlspecialchars('<input type="radio" name="opcao" value="opcao' . $i . '">Opção ' . $i . '<br>') . "\n";
                    break;
                case 'caixaselecao':
                    echo htmlspecialchars('<select><option value="opcao1">Opção 1</option><option value="opcao2">Opção 2</option></select><br>') . "\n";
                    break;
                case 'faixa':
                    echo htmlspecialchars('<input type="range" min="0" max="100"><br>') . "\n";
                    break;
            }
        }

        echo '</code></pre>';
    }
    ?>
    <footer>
        <p>Caetano Veloso e Tales Cordeiro - &copy;2023</p>
    </footer>
</body>

</html>