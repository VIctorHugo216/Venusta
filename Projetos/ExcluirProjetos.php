<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'projetos');



  if(mysqli_query($conn, "DELETE FROM tb_projetos WHERE id_projetos=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarProjetos.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>