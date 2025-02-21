<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    <h1>Calcular Sequência de Fibonacci</h1>
    <form method="POST">
        <label for="termos">Digite o número de termos:</label><br>
        <input type="number" id="termos" name="termos" required min="1">
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para calcular a sequência de Fibonacci
        function fibonacci($n) {
            $fib = [0, 1];

            for ($i = 2; $i < $n; $i++) {
                $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
            }

            return $fib;
        }

        // Pega o número de termos do formulário
        $numeroTermos = $_POST['termos'];

        // Calcula a sequência de Fibonacci
        $sequenciaFibonacci = fibonacci($numeroTermos);

        // Imprime os termos
        echo "<h2>Resultado:</h2>";
        echo "Os primeiros $numeroTermos termos da sequência de Fibonacci são:<br>";
        foreach ($sequenciaFibonacci as $termo) {
            echo "$termo ";
        }
    }
    ?>
</body>
</html>