<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$reccliente= filter_input(INPUT_POST, 'cliente');

$recemail= filter_input(INPUT_POST, 'email');

$rectipo= filter_input(INPUT_POST, 'tipo');

$recdescricao= filter_input(INPUT_POST, 'descricao');

  if(mysqli_query($conn, "UPDATE tb_contato SET cliente='$reccliente', email='$recemail', tipo='$rectipo', descricao='$recdescricao' WHERE id_contato=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarContato.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>