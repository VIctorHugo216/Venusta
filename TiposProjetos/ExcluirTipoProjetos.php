<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'tipo_projeto');



  if(mysqli_query($conn, "DELETE FROM tb_tipoprojeto WHERE id_tipoprojeto=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarTipoProjetos.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>