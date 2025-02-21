<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Remover Espaços</title>
</head>
<body>
    <h1>Remover Espaços em Branco</h1>
    <form method="POST">
        <label for="texto">Digite uma string:</label><br>
        <textarea id="texto" name="texto" required></textarea><br>
        <button type="submit">Remover Espaços</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para remover espaços
        function removerEspacos($string) {
            return str_replace(' ', '', $string);
        }

        // Pega a string do formulário
        $texto = $_POST['texto'];

        // Remove os espaços e exibe o resultado
        $textoSemEspacos = removerEspacos($texto);
        echo "<h2>Resultado:</h2>";
        echo "<p>String original: $texto</p>";
        echo "<p>String sem espaços: $textoSemEspacos</p>";
    }
    ?>
</body>
</html>