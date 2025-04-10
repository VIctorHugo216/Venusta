<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'nome');

$recdata= filter_input(INPUT_POST, 'data');

$rechorario= filter_input(INPUT_POST, 'horario');

$reccliente= filter_input(INPUT_POST, 'cliente');

$recarquiteto= filter_input(INPUT_POST, 'arquiteto');

$recdescricao= filter_input(INPUT_POST, 'descricao');

  if(mysqli_query($conn, "UPDATE tb_reunioes SET nome='$recnome', data='$recdata', horario='$rechorario', cliente='$reccliente', arquiteto='$recarquiteto', descricao='$recdescricao' WHERE id_reunioes=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarReuniao.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>