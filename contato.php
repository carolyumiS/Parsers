<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// Configurações do cPanel
$host = "localhost";
$db   = "computacao_parsers_database";
$user = "computacao_parsers_admin";
$pass = "parsers@adminccd";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO contatos (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $email, $assunto, $mensagem);

if ($stmt->execute()) {
    $stmt->close();
    $conn->close();
    header("Location: index.php?status=enviado");
    exit();
} else {
    $stmt->close();
    $conn->close();
    header("Location: index.php?status=erro");
    exit();
}
?>
