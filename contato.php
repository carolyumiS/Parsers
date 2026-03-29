<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$conn = new mysqli("127.0.0.1", "root", "", "parsers", 3307);

if ($conn->connect_error) {
    header("Location: index.php?status=erro");
    exit();
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