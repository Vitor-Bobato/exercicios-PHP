<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificar Número</title>
</head>
<body>
    <h1>Verificar se um Número é Positivo, Negativo ou Zero</h1>
    <form method="POST">
        <label for="numero">Digite um número:</label><br>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para verificar o número
        function verificarNumero($numero) {
            if ($numero > 0) {
                return "Positivo";
            } elseif ($numero < 0) {
                return "Negativo";
            } else {
                return "Zero";
            }
        }

        // Pega o número do formulário
        $numero = $_POST['numero'];

        // Verifica o número e exibe o resultado
        $resultado = verificarNumero($numero);
        echo "<h2>Resultado:</h2>";
        echo "<p>O número $numero é $resultado.</p>";
    }
    ?>
</body>
</html>