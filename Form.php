<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato - Paulo Vitor Ricken </title>
</head>
<body>

    <h1>Formulário de Contato </h1>
    <h3>Preencha este cadastro abaixo</h3>

    <form action="env.php" method="POST"> 
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea><br><br>

        <button type="submit">Enviar Dados</button>
    </form>

</body>
</html>
