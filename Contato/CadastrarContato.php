<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $cliente = $_POST["cliente"];
        $email = $_POST["email"];
        $tipo = $_POST["tipo"];
        $descricao = $_POST["descricao"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_contato(cliente, email, tipo, descricao) VALUES ('$cliente', '$email', '$tipo','$descricao')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../telas/indexCliente.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

