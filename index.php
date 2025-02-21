<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
</head>
<body>
    
    <h2>Digite seu nome:</h2>
    <form method="POST" action="">
        <input type="text" name="nome" placeholder="Seu nome" required>
        <input type="number" name="idade" placeholder="Ano de nascimento" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    //Verificar se o formulário foi enviado com sucesso
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $idade = 2025 - $_POST["idade"];
        echo "<h3>Olá, $nome! Seja bem vindo!<h3>";
        echo "<h3>Você tem $idade anos de idade blz?<h3>";
    }
    ?>
</body>
</html>