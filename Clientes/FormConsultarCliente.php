 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Clientes</title>
        <link  rel="stylesheet" href="../css/styleFormCons.css">
    
    </head>

     <body>
         <div class="form-header">
                <h1>Consultar Clientes Cadastrados</h1>
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
                        <td align="center"> <strong>Primeiro nome</strong></td>		
                        <td align="center"> <strong>Sobrenome</strong></td>
                        <td align="center"> <strong>CPF</strong></td>
                        <td align="center"> <strong>Email</strong></td>
                        <td align="center"> <strong>Celular</strong></td>
                        <td align="center"> <strong>Senha</strong></td>
                        <td align="center"> <strong>Gênero</strong></td>
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_cliente");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_cliente"]?></td>
                                <td align="center"><?=$campo["pnome"]?></td>
                                <td align="center"><?=$campo["sobrenome"]?></td>
                                <td align="center"><?=$campo["cpf"]?></td>
                                <td align="center"><?=$campo["email"]?></td>
                                <td align="center"><?=$campo["celular"]?></td>
                                <td align="center"><?=$campo["senha"]?></td>
                                <td align="center"><?=$campo["genero"]?></td>
                                <td align="center"><a href="FormEditarCliente.php?editarid=<?php echo $campo ['id_cliente'];?>">Editar</a></td>
                                <td align="center"><i><a href="ExcluirCliente.php?p=excluir&cliente=<?php echo $campo['id_cliente'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                 <div class="cancel-button" >
                     <button type="submit" style="color:#fff"><a href="../telas/indexADM.html">Cancelar</a></button>
                </div>
    </body>
</html>
