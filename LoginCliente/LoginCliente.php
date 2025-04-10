<?php


// Configurações do banco de dados
$host = "localhost"; // ou o endereço do seu servidor MySQL
$username = "root"; // usuário do MySQL
$password = "senac"; // senha do MySQL
$dbname = "db_venusta"; // nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($host, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtendo os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consultando a tabela tb_cliente para verificar as credenciais
$sql = "SELECT * FROM tb_cliente WHERE email = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$result = $stmt->get_result();

// Verificando se existe um usuário com essas credenciais
if ($result->num_rows > 0) {
    // Sucesso no login
    echo "Login bem-sucedido!";
    header("Location: ../telas/indexCliente.html");
    // Aqui você pode redirecionar para outra página ou dashboard
    // header("Location: dashboard.php"); // exemplo de redirecionamento
} else {
    // Erro no login
    echo "Usuário ou senha incorretos!";
    header("Location: FormLogin.html");
}

$stmt->close();
$conn->close();




/*
// Configurações do banco de dados
$host = "localhost"; // ou o endereço do seu servidor MySQL
$username = "root"; // usuário do MySQL
$password = ""; // senha do MySQL
$dbname = "db_eventos"; // nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($host, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtendo os dados do formulário
$nome = $_POST['nome'];
$senha = $_POST['senha'];

// Consultando a tabela tb_cliente para verificar as credenciais
$sql = "SELECT * FROM tb_cliente WHERE nome = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

// Verificando se o usuário existe e a senha corresponde
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verificar a senha
    if ($row['senha'] == $senha) {
        // Redirecionar com base no tipo de usuário
        if ($row['tipo'] == 'cliente') {
            header("Location: cliente.html");
        } elseif ($row['tipo'] == 'adm') {
            header("Location: adm.html");
        } else {
            echo "Tipo de usuário inválido.";
        }
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}

$stmt->close();
$conn->close();*/
?>
