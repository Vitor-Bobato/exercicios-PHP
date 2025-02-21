<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Inverter String</title>
</head>
<body>
    <h1>Inverter String</h1>
    <form method="POST">
        <label for="texto">Digite uma string:</label><br>
        <input type="text" id="texto" name="texto" required>
        <button type="submit">Inverter</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para inverter a string
        function inverterString($string) {
            $invertida = '';
            $tamanho = strlen($string);

            // Percorre a string de trás para frente
            for ($i = $tamanho - 1; $i >= 0; $i--) {
                $invertida .= $string[$i];
            }

            return $invertida;
        }

        // Pega a string do formulário
        $texto = $_POST['texto'];

        // Inverte a string e exibe o resultado
        $resultado = inverterString($texto);
        echo "<h2>Resultado:</h2>";
        echo "<p>String original: $texto</p>";
        echo "<p>String invertida: $resultado</p>";
    }
    ?>
</body>
</html>