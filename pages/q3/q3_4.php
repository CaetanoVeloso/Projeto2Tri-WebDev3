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
        $choice2 = $_GET["choice2"];
        $choice3 = $_GET["choice3"];
        ?>

        <p>Q4. Qual é a principal função dos rins?</p>
        <ol type="A">
            <li><a href="q3_resultado.php?choice1=<?php echo "$choice1"; ?>&choice2=<?php echo "$choice2"; ?>&choice3=<?php echo "$choice3"; ?>&choice4=A">Digestão</a></li>
            <li><a href="q3_resultado.php?choice1=<?php echo "$choice1"; ?>&choice2=<?php echo "$choice2"; ?>&choice3=<?php echo "$choice3"; ?>&choice4=B">Circulação</a></li>
            <li><a href="q3_resultado.php?choice1=<?php echo "$choice1"; ?>&choice2=<?php echo "$choice2"; ?>&choice3=<?php echo "$choice3"; ?>&choice4=C">Respiração</a></li>
            <li><a href="q3_resultado.php?choice1=<?php echo "$choice1"; ?>&choice2=<?php echo "$choice2"; ?>&choice3=<?php echo "$choice3"; ?>&choice4=D" class="correct">Excreção</a></li>
            <li><a href="q3_resultado.php?choice1=<?php echo "$choice1"; ?>&choice2=<?php echo "$choice2"; ?>&choice3=<?php echo "$choice3"; ?>&choice4=E">Locomoção</a></li>
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