<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'nome');

$recdata_nasc= filter_input(INPUT_POST, 'data_nasc');

$recgenero= filter_input(INPUT_POST, 'genero');

$recestado_civil= filter_input(INPUT_POST, 'estado_civil');

$recescolaridade= filter_input(INPUT_POST, 'escolaridade');

$reccep= filter_input(INPUT_POST, 'cep');

$recendereco= filter_input(INPUT_POST, 'endereco');

$recn= filter_input(INPUT_POST, 'n');

$reccomplemento= filter_input(INPUT_POST, 'complemento');

$recbairro= filter_input(INPUT_POST, 'bairro');

$reccidade= filter_input(INPUT_POST, 'cidade');

$recestado= filter_input(INPUT_POST, 'estado');

$rectel_cel= filter_input(INPUT_POST, 'tel_cel');

$recemail= filter_input(INPUT_POST, 'email');

$recfuncao= filter_input(INPUT_POST, 'funcao');

$recdata_admissao= filter_input(INPUT_POST, 'data_admissao');

$recsalario= filter_input(INPUT_POST, 'salario');

$recturno= filter_input(INPUT_POST, 'turno');

$reccpf= filter_input(INPUT_POST, 'cpf');

$recrg= filter_input(INPUT_POST, 'rg');

$recorgao_emissor= filter_input(INPUT_POST, 'orgao_emissor');

$recuf= filter_input(INPUT_POST, 'uf');

$recdata_expedicao= filter_input(INPUT_POST, 'data_expedicao');

$recctps= filter_input(INPUT_POST, 'ctps');

$recdata_emissao= filter_input(INPUT_POST, 'data_emissao');

$recpis= filter_input(INPUT_POST, 'pis');

$recbanco= filter_input(INPUT_POST, 'banco');

$recagencia= filter_input(INPUT_POST, 'agencia');

$recconta= filter_input(INPUT_POST, 'conta');

$rectipo= filter_input(INPUT_POST, 'tipo');

$recpix= filter_input(INPUT_POST, 'pix');

  if(mysqli_query($conn, "UPDATE tb_funcionario SET nome='$recnome', data_nasc='$recdata_nasc', genero='$recgenero', estado_civil='$recestado_civil',escolaridade='$recescolaridade',"
          . "cep='$reccep', endereco='$recendereco',n='$recn',complemento='$reccomplemento', bairro='$recbairro', cidade='$reccidade', estado='$recestado', tel_cel='$rectel_cel', "
          . "email='$recemail',funcao='$recfuncao', data_admissao='$recdata_admissao', salario='$recsalario', turno='$recturno', cpf='$reccpf', rg='$recrg', "
          . "orgao_emissor='$recorgao_emissor', uf='$recuf', data_expedicao='$recdata_expedicao', ctps='$recctps', data_emissao='$recdata_emissao', pis='$recpis', conta='$recconta', "
          . "tipo='$rectipo', pix='$recpix' WHERE id_funcionario=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarFuncionario.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);


?>