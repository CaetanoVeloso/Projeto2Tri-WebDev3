<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Projeto 2Tri - WebDev3</title>
    <link rel="icon" type="image/x-icon" href="../../favicon.ico">
    <script src="https://kit.fontawesome.com/4913238940.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h2>Desenvolvimento Web</h2>
        <a href="../../index.php" class="home"> Home </a>
    </header>
    <h1>Trabalho: Questão 03</h1>

    <main>
        <h2>Resultado Final</h2>

        <?php
        $choice1 = $_GET["choice1"];
        $choice2 = $_GET["choice2"];
        $choice3 = $_GET["choice3"];
        $choice4 = $_GET["choice4"];
        ?>

        <ol>
            <li><?php echo "$choice1";
                if ($choice1 == "C") {
                    echo "<i class=\"fa-solid fa-thumbs-up\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-thumbs-down\"></i>";
                } ?></li>
            <li><?php echo "$choice2";
                if ($choice2 == "C") {
                    echo "<i class=\"fa-solid fa-thumbs-up\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-thumbs-down\"></i>";
                } ?></li>
            <li><?php echo "$choice3";
                if ($choice3 == "D") {
                    echo "<i class=\"fa-solid fa-thumbs-up\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-thumbs-down\"></i>";
                } ?></li>
            <li><?php echo "$choice4";
                if ($choice4 == "D") {
                    echo "<i class=\"fa-solid fa-thumbs-up\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-thumbs-down\"></i>";
                } ?></li>
        </ol>
        <button>
            <a href="q3.php">Refazer</a>
        </button>
    </main>

    <footer>
        <p>Caetano Veloso e Tales Cordeiro - &copy;2023</p>
    </footer>
</body>

</html>