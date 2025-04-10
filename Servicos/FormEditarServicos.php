<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar cliente</title>
    <link rel="stylesheet" href="../css/StyleFormServ.css">
</head>
<body>
    <?php

      include("../conectarbd.php");

      $recid=filter_input(INPUT_GET, 'editarid');

      $selecionar= mysqli_query($conn, "SELECT * FROM tb_servicos WHERE id_servicos=$recid");

      $campo= mysqli_fetch_array($selecionar);

    ?>
    <div class="form">
            <form action="EditarServicos.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Serviços</h1>
                    </div>
                    
                </div>

                <!esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_servicos"]?>"> 
        
                <div class="input-group">
                   
                    <div class="input-box" style="width: 100%">
                        <label for="cliente">Nome</label>
                        <input id="cliente" type="text" name="nome"  placeholder="Digite o nome do cliente" required value="<?=$campo["nome"]?>">
                    </div>
                    <div class="input-box">
                        <label for="data">Tipo de Servicos</label>
                        <input id="data" type="text" name="tipo_servico" placeholder="Tipo de serviço" required value="<?=$campo["tipo_servico"]?>">
                    </div>
          
                    <div class="input-box" style="width: 100%">
                        <label for="horario">Materiais</label>
                        <input id="horario" type="text" name="materiais" placeholder="Materiais" required value="<?=$campo["materiais"]?>">
                    </div>
                    <div class="input-box">
                        <label for="arquiteto" >Valor do Serviço</label>
                        <input id="arquiteto" type="text" name="valor_do_servico"  placeholder="Valor do serviço" required value="<?=$campo["valor_do_servico"]?>">
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
