<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recpnome= filter_input(INPUT_POST, 'pnome');

$recsobrenome= filter_input(INPUT_POST, 'sobrenome');

$reccpf= filter_input(INPUT_POST, 'cpf');

$recemail= filter_input(INPUT_POST, 'email');

$reccelular= filter_input(INPUT_POST, 'celular');

$recsenha= filter_input(INPUT_POST, 'senha');

$recgenero= filter_input(INPUT_POST, 'genero');

  if(mysqli_query($conn, "UPDATE tb_cliente SET pnome='$recpnome', sobrenome='$recsobrenome', cpf='$reccpf', email='$recemail', celular='$reccelular', senha='$recsenha', genero='$recgenero' WHERE id_cliente=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarCliente.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>