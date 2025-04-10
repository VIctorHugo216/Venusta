<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$rectipo= filter_input(INPUT_POST, 'tipo');

$recarquiteto_responsavel= filter_input(INPUT_POST, 'arquiteto_responsavel');

$recestilo_de_projeto= filter_input(INPUT_POST, 'estilo_de_projeto');

$recorcamento= filter_input(INPUT_POST, 'orcamento');

$recprazo_entrega= filter_input(INPUT_POST, 'prazo_entrega');

$reccliente= filter_input(INPUT_POST, 'cliente');

$recdescricao= filter_input(INPUT_POST, 'descricao');


  if(mysqli_query($conn, "UPDATE tb_projetos SET tipo='$rectipo', arquiteto_responsavel='$recarquiteto_responsavel', estilo_de_projeto='$recestilo_de_projeto', orcamento='$recorcamento', prazo_entrega='$recprazo_entrega', cliente='$reccliente', descricao='$recdescricao' WHERE id_projetos=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarProjetos.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>