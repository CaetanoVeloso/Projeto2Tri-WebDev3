<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Projeto 2Tri - WebDev3</title>
    <link rel="icon" type="image/x-icon" href="../../favicon.ico">
</head>

<body>
    <header>
        <h2>Desenvolvimento Web</h2>
        <a href="../../index.php" class="home"> Home </a>
    </header>
    <h1>Trabalho: Questão 03</h1>

    <main>
        <?php
        $choice1 = $_GET["choice1"];
        ?>
        <h2>Q2. Quantos planetas existem no sistema solar?</h2>
        <ol type="A">
            <li><a href="q3_3.php?choice1=<?php echo "$choice1"; ?>&choice2=A"> Sete</a></li>
            <li><a href="q3_3.php?choice1=<?php echo "$choice1"; ?>&choice2=B"> Nove</a></li>
            <li><a href="q3_3.php?choice1=<?php echo "$choice1"; ?>&choice2=C" class="correct"> Oito</a></li>
            <li><a href="q3_3.php?choice1=<?php echo "$choice1"; ?>&choice2=D"> Dez</a></li>
            <li><a href="q3_3.php?choice1=<?php echo "$choice1"; ?>&choice2=E"> Seis</a></li>
        </ol>
        <button>
            <a href="q3.php">Cancelar</a>
        </button>
    </main>

    <footer>
        <p>Caetano Veloso e Tales Cordeiro - &copy;2023</p>
    </footer>
</body>

</html>