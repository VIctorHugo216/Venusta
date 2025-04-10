<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar reunião</title>
    <link rel="stylesheet" href="../css/StyleFormAgend.css">
</head>
<body>
    <?php

      include("../conectarbd.php");

      $recid=filter_input(INPUT_GET, 'editarid');

      $selecionar= mysqli_query($conn, "SELECT * FROM tb_reunioes WHERE id_reunioes=$recid");

      $campo= mysqli_fetch_array($selecionar);

    ?>
    <div class="container">
        <div class="form-image">
            <img src="../img/Clean Elegant Typography Brand Logo.png" alt="">
        </div>
        <div class="form">
            <form action="EditarReuniao.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Alterar reuniao</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>

                <!esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_reunioes"]?>"> 
        
                <div class="input-group">
                    <div class="input-box">
                        <label>Nome do Evento</label>
                        <input id="nome_evento" type="text" name="nome" required value="<?=$campo["nome"]?>">
                    </div>
                    <div class="input-box">
                        <label>Data Evento</label>
                        <input id="dt_evento" type="text" name="data" required value="<?=$campo["data"]?>">
                    </div>
                    <div class="input-box">
                        <label>Horário</label>
                        <input id="horario" type="time" name="horario" required value="<?=$campo["horario"]?>">
                    </div>
                    <div class="input-box">
                        <label>Cliente</label>
                        <input id="cliente" type="text" name="cliente" required value="<?=$campo["cliente"]?>">
                    </div>

                    <div class="input-box">
                        <label>Arquiteto Responsável</label>
                        <input id="arquiteto_resp" type="text" name="arquiteto_resp" required value="<?=$campo["arquiteto"]?>">
                    </div>

                    <div class="input-box">
                        <label>Descrição</label>
                        <input id="descricao" type="text" name="descricao" required value="<?=$campo["descricao"]?>">
                    </div>

                </div>

                <div class="continue-button" >
                    <button type="submit" style="color:#fff">Continuar</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>
