<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Tipo de Projeto</title>
    <link rel="stylesheet" href="../css/StyleFormProjetos.css">
</head>
<body>
    <?php

      include("../conectarbd.php");

      $recid=filter_input(INPUT_GET, 'editarid');

      $selecionar= mysqli_query($conn, "SELECT * FROM tb_tipoprojetos WHERE id_tipoprojeto=$recid");

      $campo= mysqli_fetch_array($selecionar);

    ?>

                <!esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_tipoprojeto"]?>"> 
        
 <div class="form">
     <form action="EditarTipoProjetos.php" method="post">
                <div class="form-header">
                        <h1>Tipo de Projeto</h1>
                      
                </div>

                <div class="input-group">
                   
                    <div class="input-box" style="width: 100%">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" required value="<?=$campo["nome"]?>">
                    </div>                 
                    
                    <div class="input-box" style="width: 100%">
                        <label for="descricao">Descrição</label>
                        <input id="descricao" type="text" name="descricao" required value="<?=$campo["descricao"]?>">
                    </div>

</div>
                <div class="continue-button" >
                    <button type="submit" style="color:#fff; font-size: 1rem;">Alterar</button>
               
                <button type="button" style="color:#fff"> <a href="../telas/indexADM.html">Cancelar</a></button>
                </div>
            </form>
            

        
    </div>
    
    
</body>
</html>
