<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificar Palíndromo</title>
</head>
<body>
    <h1>Verificar se uma Palavra é um Palíndromo</h1>
    <form method="POST">
        <label for="palavra">Digite uma palavra ou frase:</label><br>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para verificar palíndromo
        function ehPalindromo($palavra) {
            $palavra = strtolower(str_replace(' ', '', $palavra));
            $palavraInvertida = strrev($palavra);
            return $palavra == $palavraInvertida;
        }

        // Pega a palavra do formulário
        $palavra = $_POST['palavra'];

        // Verifica se é um palíndromo e exibe o resultado
        $resultado = ehPalindromo($palavra) ? "é um palíndromo." : "não é um palíndromo.";
        echo "<h2>Resultado:</h2>";
        echo "<p>A palavra/frase '$palavra' $resultado</p>";
    }
    ?>
</body>
</html>