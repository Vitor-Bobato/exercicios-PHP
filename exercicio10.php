<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificar Pangrama</title>
</head>
<body>
    <h1>Verificar se um Texto é um Pangrama</h1>
    <form method="POST">
        <label for="texto">Digite um texto:</label><br>
        <textarea id="texto" name="texto" required></textarea><br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para verificar pangrama
        function ehPangrama($texto) {
            $texto = strtolower($texto);
            $alfabeto = range('a', 'z');

            foreach ($alfabeto as $letra) {
                if (strpos($texto, $letra) === false) {
                    return false;
                }
            }

            return true;
        }

        // Pega o texto do formulário
        $texto = $_POST['texto'];

        // Verifica se é um pangrama e exibe o resultado
        $resultado = ehPangrama($texto) ? "é um pangrama." : "não é um pangrama.";
        echo "<h2>Resultado:</h2>";
        echo "<p>O texto '$texto' $resultado</p>";
    }
    ?>
</body>
</html>