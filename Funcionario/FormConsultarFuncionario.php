 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Funcionario</title>
        <link  rel="stylesheet" href="../css/styleFormCons.css">
    
    </head>

     <body>
         <div class="form-header">
                <h1>Consultar Funcionario Cadastrados</h1>
        </div>
                    </div>
                <table
                   width="100%"
                   border="1" 
                   bordercolor="black"
                   cellspacing="2" 	
                   cellpadding="5"
                   >
                    <tr class="title">
                        <td align="center"> <strong>ID</strong></td>	
                        <td align="center"> <strong>Nome</strong></td>		
                        <td align="center"> <strong>Data_Nasc</strong></td>
                        <td align="center"> <strong>Genero</strong></td>
                        <td align="center"> <strong>Estado_Civil</strong></td>
                        <td align="center"> <strong>Escolaridade</strong></td>
                        <td align="center"> <strong>Cep</strong></td>
                        <td align="center"> <strong>Endereço</strong></td>
                        <td align="center"> <strong>N</strong></td>
                        <td align="center"> <strong>Complemento</strong></td>
                        <td align="center"> <strong>Bairro</strong></td>
                        <td align="center"> <strong>Cidade</strong></td>
                        <td align="center"> <strong>Estado</strong></td>
                        <td align="center"> <strong>Tel_cel</strong></td>
                        <td align="center"> <strong>Email</strong></td>
                        <td align="center"> <strong>Função</strong></td>
                        <td align="center"> <strong>Data_admissao</strong></td>
                        <td align="center"> <strong>Salario</strong></td>
                        <td align="center"> <strong>Turno</strong></td>
                        <td align="center"> <strong>Cpf</strong></td>
                        <td align="center"> <strong>Rg</strong></td>
                        <td align="center"> <strong>Orgao_Emissor</strong></td>
                        <td align="center"> <strong>Uf</strong></td>
                        <td align="center"> <strong>Data_Emissao</strong></td>
                        <td align="center"> <strong>Pis</strong></td>
                        <td align="center"> <strong>Banco</strong></td>
                        <td align="center"> <strong>Agencia</strong></td>
                        <td align="center"> <strong>Conta</strong></td>
                        <td align="center"> <strong>Tipo</strong></td>
                        <td align="center"> <strong>Pix</strong></td>
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_funcionario");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_funcionario"]?></td>
                                <td align="center"><?=$campo["nome"]?></td>
                                <td align="center"><?=$campo["data_nasc"]?></td>
                                <td align="center"><?=$campo["genero"]?></td>
                                <td align="center"><?=$campo["estado_civil"]?></td>
                                <td align="center"><?=$campo["escolaridade"]?></td>
                                <td align="center"><?=$campo["cep"]?></td>
                                <td align="center"><?=$campo["endereco"]?></td>
                                <td align="center"><?=$campo["n"]?></td>
                                <td align="center"><?=$campo["complemento"]?></td>
                                <td align="center"><?=$campo["bairro"]?></td>
                                <td align="center"><?=$campo["cidade"]?></td>
                                <td align="center"><?=$campo["estado"]?></td>
                                <td align="center"><?=$campo["tel_cel"]?></td>
                                <td align="center"><?=$campo["email"]?></td>
                                <td align="center"><?=$campo["funcao"]?></td>
                                <td align="center"><?=$campo["data_admissao"]?></td>
                                <td align="center"><?=$campo["salario"]?></td>
                                <td align="center"><?=$campo["turno"]?></td>
                                <td align="center"><?=$campo["cpf"]?></td>
                                <td align="center"><?=$campo["rg"]?></td>
                                <td align="center"><?=$campo["orgao_emissor"]?></td>
                                <td align="center"><?=$campo["uf"]?></td>
                                <td align="center"><?=$campo["data_expedicao"]?></td>
                                <td align="center"><?=$campo["ctps"]?></td>
                                <td align="center"><?=$campo["data_emissao"]?></td>
                                <td align="center"><?=$campo["pis"]?></td>
                                <td align="center"><?=$campo["banco"]?></td>
                                <td align="center"><?=$campo["agencia"]?></td>
                                <td align="center"><?=$campo["conta"]?></td>
                                <td align="center"><?=$campo["tipo"]?></td>
                                <td align="center"><?=$campo["pix"]?></td>
                                <td align="center"><a href="FormEditarFuncionario.php?editarid=<?php echo $campo ['id_funcionario'];?>">Editar</a></td>
                                <td align="center"><i><a href="ExcluirFuncionario.php?p=excluir&funcionario=<?php echo $campo['id_funcionario'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                 <div class="cancel-button" >
                     <button><a href="../telas/indexADM.html">Cancelar</a></button>
                </div>
    </body>
</html>
