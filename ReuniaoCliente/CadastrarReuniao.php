<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $horario = $_POST["horario"];
        $cliente = $_POST["cliente"];
        $arquiteto = $_POST["arquiteto"];
        $descricao = $_POST["descricao"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_reunioes(nome, data, horario, cliente, arquiteto, descricao) VALUES ('$nome', '$data', '$horario','$cliente', '$arquiteto', '$descricao')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../telas/indexCliente.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

