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

// Obtendo o e-mail do formulário
$email = $_POST['email'];

// Verificando se o e-mail existe no banco de dados
$sql = "SELECT * FROM tb_cliente WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Gerar uma senha temporária
    $senha_temporaria = substr(md5(time()), 0, 8);

    // Atualizar a senha no banco de dados
    $nova_senha_hash = password_hash($senha_temporaria, PASSWORD_DEFAULT);
    $sql_update = "UPDATE tb_cliente SET senha = ? WHERE email = ?";
    $stmt_update = $conn->prepare($sql_update);

    if (!$stmt_update) {
        die("Erro na preparação do statement: " . $conn->error);
    }

    $stmt_update->bind_param("ss", $nova_senha_hash, $email);

    if ($stmt_update->execute()) {
        // Enviar a senha temporária por e-mail
        $para = $email;
        $assunto = "Recuperação de Senha";
        $mensagem = "Olá,\n\nSua senha temporária é: $senha_temporaria\n\nPor favor, faça login com essa senha temporária e altere sua senha o mais rápido possível.";
        $cabecalho = "From: seuemail@example.com";

        if (mail($para, $assunto, $mensagem, $cabecalho)) {
            echo "Uma nova senha foi enviada para o seu e-mail.";
        } else {
            echo "Erro ao enviar o e-mail.";
        }
    } else {
        echo "Erro ao atualizar a senha: " . $stmt_update->error;
    }

    $stmt_update->close();
} else {
    echo "E-mail não encontrado.";
}

$stmt->close();
$conn->close();
?>
