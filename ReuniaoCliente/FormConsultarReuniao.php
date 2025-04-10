 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Reunião</title>
        <link  rel="stylesheet" href="../css/styleFormCons.css">
    
    </head>

     <body>
         <div class="form-header">
                <h1>Consultar reunião</h1>
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
                        <td align="center"> <strong>Nome Evento</strong></td>		
                        <td align="center"> <strong>Data Evento</strong></td>
                        <td align="center"> <strong>Horário</strong></td>
                        <td align="center"> <strong>Cliente</strong></td>
                        <td align="center"> <strong>Arquiteto Responsável</strong></td>
                        <td align="center"> <strong>Descrição</strong></td>                       
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_reunioes");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_reunioes"]?></td>
                                <td align="center"><?=$campo["nome"]?></td>
                                <td align="center"><?=$campo["data"]?></td>
                                <td align="center"><?=$campo["horario"]?></td>
                                <td align="center"><?=$campo["cliente"]?></td>
                                <td align="center"><?=$campo["arquiteto"]?></td>
                                <td align="center"><?=$campo["descricao"]?></td>
                                <td align="center"><a href="FormEditarReuniao.php?editarid=<?php echo $campo ['id_reunioes'];?>">Editar</a></td>
                                <td align="center"><i><a href="ExcluirReuniao.php?p=excluir&reunioes=<?php echo $campo['id_reunioes'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                 <div class="cancel-button" >
                     <a href="../indexADM.html"><button type="submit" style="color:#fff">Cancelar</button></a>
                </div>
    </body>
</html>
