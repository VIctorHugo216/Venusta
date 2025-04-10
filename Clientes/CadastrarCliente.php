<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $pnome = $_POST["pnome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $celular = $_POST["celular"];
        $senha = $_POST["senha"];
        $genero = $_POST["genero"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_cliente(pnome, sobrenome, cpf, email, celular, senha, genero) VALUES ('$pnome', '$sobrenome', '$cpf','$email', '$celular', '$senha', '$genero')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../telas/index.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

