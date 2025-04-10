<?php
// Configurações do banco de dados
$host = "localhost";
$username = "root";
$password = "senac";
$dbname = "db_venusta";

// Conexão com o banco de dados
$conn = new mysqli($host, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtendo dados do formulário
$email = $_POST['email'];
$nova_senha = $_POST['nova_senha'];
$confirmar_senha = $_POST['confirmar_senha'];

// Verifica se as senhas são iguais
if ($nova_senha === $confirmar_senha) {
    $nova_senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);

    // Atualizando a senha no banco
    $sql = "UPDATE tb_cliente SET senha = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nova_senha_hash, $email);

    if ($stmt->execute()) {
        echo "Senha alterada com sucesso!";
    } else {
        echo "Erro ao alterar a senha.";
    }
} else {
    echo "As senhas não coincidem.";
}

$stmt->close();
$conn->close();
?>
