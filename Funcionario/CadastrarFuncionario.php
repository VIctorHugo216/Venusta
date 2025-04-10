<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $data_nasc = $_POST["data_nasc"];
        $genero = $_POST["genero"];
        $estado_civil = $_POST["estado_civil"];
        $escolaridade = $_POST["escolaridade"];
        $cep = $_POST["cep"];
        $endereco = $_POST["endereco"];
        $n = $_POST["n"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $tel_cel = $_POST["tel_cel"];
        $email = $_POST["email"];
        $funcao = $_POST["funcao"];
        $data_admissao = $_POST["data_admissao"];
        $salario = $_POST["salario"];
        $turno = $_POST["turno"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $orgao_emissor = $_POST["orgao_emissor"];
        $uf = $_POST["uf"];
        $data_expedicao = $_POST["data_expedicao"];
        $ctps = $_POST["ctps"];
        $data_emissao = $_POST["data_emissao"];
        $pis = $_POST["pis"];
        $banco = $_POST["banco"];
        $agencia = $_POST["agencia"];
        $conta = $_POST["conta"];
        $tipo = $_POST["tipo"];
        $pix = $_POST["pix"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tb_funcionario(nome, data_nasc, genero, estado_civil, escolaridade, cep, endereco, n, complemento, bairro, cidade, estado, tel_cel, email, funcao, data_admissao, salario, turno, cpf, rg, orgao_emissor, uf, data_expedicao, ctps, data_emissao, pis, banco, agencia, conta, tipo, pix) VALUES ('$nome', '$data_nasc', '$genero','$estado_civil','$escolaridade','$cep','$endereco','$n','$complemento','$bairro','$cidade','$estado','$tel_cel','$email','$funcao','$data_admissao','$salario','$turno','$cpf','$rg','$orgao_emissor','$uf','$data_expedicao','$ctps','$data_emissao','$pis','$banco','$agencia','$conta','$tipo', '$pix')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../telas/indexADM.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

