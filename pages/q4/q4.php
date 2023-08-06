<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <style>
        table {
            width: 40%;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
    <title>Projeto 2Tri - WebDev3</title>
    <link rel="icon" type="image/x-icon" href="../../favicon.ico">
</head>

<body>
    <header>
        <h2>Desenvolvimento Web</h2>
        <a href="../../index.php" class="home"> Home </a>
    </header>
    <h1>Trabalho: Questão 04</h1>

    <main>
        <fieldset>
            <legend>Parâmetros</legend>
            <form method="post">
                <label>Aporte inicial (R$):</label>
                <input type="number" name="initialInvestment" min="1" max="999999.99" value="<?php echo isset($_POST['initialInvestment']) ? $_POST['initialInvestment'] : ''; ?>" required>
                <span> [até R$ 999.999,99]</span><br>

                <label>Período (monthes): </label>
                <input type="number" name="duration" min="1" max="480" value="<?php echo isset($_POST['duration']) ? $_POST['duration'] : ''; ?>" required>
                <span> [1 a 480]</span><br>

                <label>Rendimento mensal (%): </label>
                <input type="number" step="0.01" name="interestRate" value="<?php echo isset($_POST['interestRate']) ? $_POST['interestRate'] : ''; ?>" required>
                <span> [até 20%]</span><br>

                <label>Aporte mensal: </label>
                <input type="number" name="monthlyContribution" value="<?php echo isset($_POST['monthlyContribution']) ? $_POST['monthlyContribution'] : ''; ?>" required>
                <span> [até R$ 999.999,99]</span><br>
                <input type="submit" name="submit" value="Simular">
            </form>
        </fieldset>

        <?php
        function Calc($initialValue, $monthlyContribution, $interest_rate)
        {
            $rendimento = ($initialValue + $monthlyContribution) * ($interest_rate / 100);
            $total = $initialValue + $monthlyContribution + $rendimento;
            return array($rendimento, $total);
        }

        if (isset($_POST['submit'])) {
            $initialInvestment = floatval($_POST['initialInvestment']);
            $duration = intval($_POST['duration']);
            $interestRate = floatval($_POST['interestRate']);
            $monthlyContribution = floatval($_POST['monthlyContribution']);

            $initialValue = $initialInvestment;

            echo '<h2>Resultados:</h2>';
            echo '<table border="1">';
            echo '<tr><th>Mês</th><th>Valor Inicial</th><th>Aporte Mensal</th><th>Rendimento</th><th>Total</th></tr>';

            for ($month = 1; $month <= $duration; $month++) {
                list($rendimento, $total) = calc($initialValue, $monthlyContribution, $interestRate);
                echo '<tr>';
                echo '<td>' . $month . '</td>';
                echo '<td>' . number_format($initialValue, 2, ',', '.') . '</td>';
                echo '<td>' . number_format($monthlyContribution, 2, ',', '.') . '</td>';
                echo '<td>' . number_format($rendimento, 2, ',', '.') . '</td>';
                echo '<td>' . number_format($total, 2, ',', '.') . '</td>';
                echo '</tr>';
                $initialValue = $total;
            }

            echo '</table>';
        }
        ?>
        <footer>
            <p>Caetano Veloso e Tales Cordeiro - &copy;2023</p>
        </footer>
</body>
</html>