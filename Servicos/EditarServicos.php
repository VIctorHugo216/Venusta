<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recpnome= filter_input(INPUT_POST, 'nome');

$rectipo_servico= filter_input(INPUT_POST, 'tipo_servico');

$recmateriais= filter_input(INPUT_POST, 'materiais');

$recvalor_do_servico= filter_input(INPUT_POST, 'valor_do_servico');

  if(mysqli_query($conn, "UPDATE tb_servicos SET nome='$recpnome', tipo_servico='$rectipo_servico', materiais='$recmateriais', valor_do_servico='$recvalor_do_servico' WHERE id_servicos=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarServicos.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>