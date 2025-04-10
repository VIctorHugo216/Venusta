<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $tipo_servico = $_POST["tipo_servico"];
        $materiais = $_POST["materiais"];
        $valor_do_servico = $_POST["valor_do_servico"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_servicos(nome, tipo_servico, materiais, valor_do_servico) VALUES ('$nome', '$tipo_servico', '$materiais','$valor_do_servico')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../telas/indexADM.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

