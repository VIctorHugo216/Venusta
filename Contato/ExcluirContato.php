<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'contato');



  if(mysqli_query($conn, "DELETE FROM tb_contato WHERE id_contato=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarContato.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>