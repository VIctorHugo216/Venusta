<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar cliente</title>
    <link rel="stylesheet" href="../css/styleFormCliente1.css">
</head>
<body>
    <?php

      include("../conectarbd.php");

      $recid=filter_input(INPUT_GET, 'editarid');

      $selecionar= mysqli_query($conn, "SELECT * FROM tb_cliente WHERE id_cliente=$recid");

      $campo= mysqli_fetch_array($selecionar);

    ?>
    <div class="container">
        <div class="form-image">
            <img src="../img/Clean Elegant Typography Brand Logo.png" alt="">
        </div>
        <div class="form">
            <form action="EditarCliente.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Alterar dados do cliente</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>

                <!esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_cliente"]?>"> 
        
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="pnome" placeholder="Digite seu primeiro nome" required value="<?=$campo["pnome"]?>">
                    </div>
                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required value="<?=$campo["sobrenome"]?>">
                    </div>
                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" placeholder="Digite seu cpf" required value="<?=$campo["cpf"]?>">
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required value="<?=$campo["email"]?>">
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="celular" placeholder="(xx) xxxx-xxxx" required value="<?=$campo["celular"]?>">
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required value="<?=$campo["senha"]?>">
                    </div>


                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="genero">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="genero">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="genero">
                            <label for="others">Outros</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button" >
                    <button type="submit" style="color:#fff">Alterar</button>
                
                
                    <button type="submit" style="color:#fff"><a href="../telas/indexADM.html">Cancelar</a></button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>
