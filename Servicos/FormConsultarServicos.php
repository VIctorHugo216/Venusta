 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Serviços</title>
        <link  rel="stylesheet" href="../css/styleFormCons.css">
    
    </head>

     <body>
         <div class="form-header">
                <h1>Consultar Serviços Cadastrados</h1>
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
                        <td align="center"> <strong>Tipo de Serviço</strong></td>
                        <td align="center"> <strong>Materiais</strong></td>
                        <td align="center"> <strong>Valor do serviço</strong></td>
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_servicos");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_servicos"]?></td>
                                <td align="center"><?=$campo["nome"]?></td>
                                <td align="center"><?=$campo["tipo_servico"]?></td>
                                <td align="center"><?=$campo["materiais"]?></td>
                                <td align="center"><?=$campo["valor_do_servico"]?></td>
                                <td align="center"><a href="FormEditarServicos.php?editarid=<?php echo $campo ['id_servicos'];?>">Editar</a></td>
                                <td align="center"><i><a href="ExcluirServicos.php?p=excluir&servicos=<?php echo $campo['id_servicos'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                <div class="cancel-button" ><a href="../telas/indexADM.html">
                         <button type="submit" style="color:#fff">Cancelar</button></a>
                </div>
    </body>
</html>
