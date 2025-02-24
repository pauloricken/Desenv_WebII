<?php
// Verifica se o formulário foi enviado via POST, conforme podemos ver na 'Action' do forms (form.pgp)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Grava os dados enviados
    $nome = $_REQUEST['nome'];
    $telefone = $_REQUEST['telefone'];
    $email = $_REQUEST['email'];
    $mensagem = $_REQUEST['mensagem'];

    // Exibe na tela para o usuário 
    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
    echo "<p><strong>Telefone:</strong> " . htmlspecialchars($telefone) . "</p>";
    echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($mensagem)) . "</p>";

    // Exibe  requisição HTTP
    echo "<h2>Cabeçalho da Requisição HTTP:</h2>";
    echo "<pre>";
    print_r(getallheaders());
    echo "</pre>";

    // grava e exibe o método utilizado na requisição
    echo "<p><strong>Método utilizado na requisição:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";
} else {
    echo "<p>O formulário não foi enviado corretamente.</p>";
}
?>
<a href="Form.php">Voltar</a>
