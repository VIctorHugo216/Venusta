 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Projetos</title>
        <link  rel="stylesheet" href="../css/styleFormCons.css">
    
    </head>

     <body>
         <div class="form-header">
                <h1>Consultar Projetos Cadastrados</h1>
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
                        <td align="center"> <strong>Tipo</strong></td>		
                        <td align="center"> <strong>Arquiteto</strong></td>
                        <td align="center"> <strong>Estilo</strong></td>
                        <td align="center"> <strong>Orçamento</strong></td>
                        <td align="center"> <strong>Prazo de entrega</strong></td>
                        <td align="center"> <strong>Cliente</strong></td>
                        <td align="center"> <strong>Descrição</strong></td>
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_projetos");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_projetos"]?></td>
                                <td align="center"><?=$campo["tipo"]?></td>
                                <td align="center"><?=$campo["arquiteto_responsavel"]?></td>
                                <td align="center"><?=$campo["estilo_de_projeto"]?></td>
                                <td align="center"><?=$campo["orcamento"]?></td>
                                <td align="center"><?=$campo["prazo_entrega"]?></td>
                                <td align="center"><?=$campo["cliente"]?></td>
                                <td align="center"><?=$campo["descricao"]?></td>
                                <td align="center"><a href="FormEditarProjetos.php?editarid=<?php echo $campo ['id_projetos'];?>">Editar</a></td>
                                <td align="center"><i><a href="ExcluirProjetos.php?p=excluir&projetos=<?php echo $campo['id_projetos'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                 <div class="cancel-button" >
                     <button type="submit" style="color:#fff"><a href="../telas/indexADM.html">Cancelar</a></button>
                </div>
    </body>
</html>
