<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $tipo = $_POST["tipo"];
        $arquiteto_responsavel = $_POST["arquiteto_responsavel"];
        $estilo_de_projeto = $_POST["estilo_de_projeto"];
        $orcamento = $_POST["orcamento"];
        $prazo_entrega = $_POST["prazo_entrega"];
        $cliente = $_POST["cliente"];
        $descricao = $_POST["descricao"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_projetos(tipo,arquiteto_responsavel, estilo_de_projeto, orcamento, prazo_entrega, cliente, descricao) VALUES ('$tipo', '$arquiteto_responsavel', '$estilo_de_projeto','$orcamento', '$prazo_entrega','$cliente', '$descricao')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../telas/indexADM.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

