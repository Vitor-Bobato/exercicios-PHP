<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Substituir Múltiplos de 3</title>
</head>
<body>
    <h1>Substituir Múltiplos de 3 por X</h1>
    <form method="POST">
        <label for="limite">Digite o limite (ex: 20):</label><br>
        <input type="number" id="limite" name="limite" required min="1">
        <button type="submit">Gerar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pega o limite do formulário
        $limite = $_POST['limite'];

        echo "<h2>Resultado:</h2>";
        echo "<p>Números de 1 a $limite:</p>";

        // Loop para gerar os números
        for ($i = 1; $i <= $limite; $i++) {
            if ($i % 3 == 0) {
                echo "X ";
            } else {
                echo "$i ";
            }
        }
    }
    ?>
</body>
</html>