<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contar Palavras</title>
</head>
<body>
    <h1>Contar Palavras e Imprimir em Linhas Separadas</h1>
    <form method="POST">
        <label for="frase">Digite uma frase:</label><br>
        <textarea id="frase" name="frase" required></textarea><br>
        <button type="submit">Contar Palavras</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para contar e imprimir palavras
        function contarEPalavras($frase) {
            $palavras = explode(' ', $frase);
            $numeroPalavras = count($palavras);

            echo "<h2>Resultado:</h2>";
            echo "<p>Número de palavras: $numeroPalavras</p>";
            echo "<p>Palavras:</p>";
            foreach ($palavras as $palavra) {
                echo "$palavra<br>";
            }
        }

        // Pega a frase do formulário
        $frase = $_POST['frase'];

        // Processa a frase
        contarEPalavras($frase);
    }
    ?>
</body>
</html>