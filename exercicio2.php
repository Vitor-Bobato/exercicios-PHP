<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificar Número Primo</title>
</head>
<body>
    <h1>Verificar se um Número é Primo</h1>
    <form method="POST">
        <label for="numero">Digite um número:</label><br>
        <input type="number" id="numero" name="numero" required min="2">
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para verificar se um número é primo
        function ehPrimo($numero) {
            if ($numero < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false; // Não é primo
                }
            }
            return true; // É primo
        }

        // Pega o número do formulário
        $numero = $_POST['numero'];

        // Verifica se é primo e exibe o resultado
        if (ehPrimo($numero)) {
            echo "<h2>Resultado:</h2>";
            echo "<p>O número $numero é primo.</p>";
        } else {
            echo "<h2>Resultado:</h2>";
            echo "<p>O número $numero não é primo.</p>";
        }
    }
    ?>
</body>
</html>