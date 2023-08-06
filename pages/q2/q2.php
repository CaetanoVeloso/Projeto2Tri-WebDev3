<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Projeto 2Tri - WebDev3</title>
</head>

<body>
    <header>
        
    </header>

    <main>
        <h1>Mapa de Índice de Massa Corporal (IMC)</h1>

        <?php
        function calcularIMC($peso, $altura)
        {
            return $peso / (($altura / 100) * ($altura / 100));
        }

        $min_altura = 146;
        $max_altura = 210;
        $min_peso = 46;
        $max_peso = 120;

        $cor = array(
            "Abaixo do peso" => "#FFFF00",
            "Peso normal" => "#00FF00",
            "Sobrepeso" => "#FFA500",
            "Obesidade grau I" => "#FF0000",
            "Obesidade grau II" => "#800080"
        );

        echo "<table>";

        echo "<tr>";
        echo "<td></td>";
        for ($peso = $min_peso; $peso <= $max_peso; $peso++) {
            echo "<td>" . $peso . "</td>";
        }
        echo "</tr>";

        // Tabela
        for ($altura = $min_altura; $altura <= $max_altura; $altura++) {
            echo "<tr>";
            echo "<td>" . $altura . "</td>";
            for ($peso = $min_peso; $peso <= $max_peso; $peso++) {
                $imc = calcularIMC($peso, $altura);
                $imc_grau = "";

                if ($imc < 18.5) {
                    $imc_grau = "Abaixo do peso";
                } elseif ($imc < 24.9) {
                    $imc_grau = "Peso normal";
                } elseif ($imc < 29.9) {
                    $imc_grau = "Sobrepeso";
                } elseif ($imc < 34.9) {
                    $imc_grau = "Obesidade grau I";
                } else {
                    $imc_grau = "Obesidade grau II";
                }

                echo "<td style='background-color: " . $cor[$imc_grau] . "' title='" . $imc_grau . ", Peso: " . $peso . " kg, Altura: " . $altura . " cm'>" . round($imc, 1) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </main><br>

    <footer>
        
        
    </footer>
</body>

</html>