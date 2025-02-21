<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Substituir Vogais</title>
</head>
<body>
    <h1>Substituir Vogais por *</h1>
    <form method="POST">
        <label for="texto">Digite uma frase:</label><br>
        <input type="text" id="texto" name="texto" required>
        <button type="submit">Substituir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para substituir vogais por *
        function substituirVogaisPorAsteriscos($string) {
            $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
            return str_replace($vogais, '*', $string);
        }

        // Pega o texto do formulário
        $texto = $_POST['texto'];
        $resultado = substituirVogaisPorAsteriscos($texto);

        // Exibe o resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>$resultado</p>";
    }
    ?>
</body>
</html>