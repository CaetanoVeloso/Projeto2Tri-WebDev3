<?php
session_start();

$questions = array(
    "Qual é a capital da França?",
    "Quantos planetas existem no sistema solar?",
    "Qual é o maior mamífero terrestre?",
    "Qual é a principal função dos rins?"
);

$choices = array(
    array("Paris", "Madrid", "Londres", "Berlim", "Roma"),
    array("Sete", "Nove", "Dez", "Oito", "Seis"),
    array("Elefante", "Girafa", "Rinoceronte", "Baleia Azul", "Leão"),
    array("Digestão", "Circulação", "Respiração", "Excreção", "Locomoção")
);

$correctAnswers = array(0, 2, 3, 3);

$questionNumber = $_GET["numero"] ?? 1;
$nextQuestion = $questionNumber + 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["respostas"][$questionNumber - 1] = $_POST["resposta"];
    if ($nextQuestion > count($questions)) {
        header("Location: resultado.php");
        exit;
    } else {
        header("Location: questao.php?numero=$nextQuestion");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Questão <?php echo $questionNumber; ?></title>
</head>
<body>
    <h2>Questão <?php echo $questionNumber; ?></h2>
    <p><?php echo $questions[$questionNumber - 1]; ?></p>
    <form method="post" action="questao.php?numero=<?php echo $questionNumber; ?>">
        <?php
        foreach ($choices[$questionNumber - 1] as $index => $choice) {
            echo "<p><a href='questao.php?numero=$nextQuestion&resposta=$index'>$choice</a></p>";
        }
        ?>
    </form>
</body>
</html>
