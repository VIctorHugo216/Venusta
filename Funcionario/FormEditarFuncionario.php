<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar cliente</title>
        <link rel="stylesheet" href="../css/StyleFuncionario11.css">
    </head>
    <body>
        <?php
        include("../conectarbd.php");

        $recid = filter_input(INPUT_GET, 'editarid');

        $selecionar = mysqli_query($conn, "SELECT * FROM tb_funcionario WHERE id_funcionario=$recid");

        $campo = mysqli_fetch_array($selecionar);
        ?>
        <div class="form">
            <form action="EditarFuncionario.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Funcionario</h1>
                    </div>
                </div>

                <!esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
                <input type="hidden" name="id" value="<?= $campo["id_funcionario"] ?>"> 

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Nome" required value="<?= $campo["nome"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="data_nasc">Data de Nascimento</label>
                        <input id="data_nasc" type="date" name="data_nasc" placeholder="Data de Nascimento" required value="<?= $campo["data_nasc"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="genero">Gênero</label>
                        <input id="genero" type="text" name="genero" placeholder="Gênero" required value="<?= $campo["genero"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="estado_civil">Estado Civil</label>
                        <input id="estado_civil" type="text" name="estado_civil" placeholder="Estado Civil" required value="<?= $campo["estado_civil"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="escolaridade">Escolaridade</label>
                        <input id="escolaridade" type="text" name="escolaridade" placeholder="Escolaridade" required value="<?= $campo["escolaridade"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="cep">Cep</label>
                        <input id="cep" type="text" name="cep" placeholder="Cep" required value="<?= $campo["cep"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="endereco">Endereço</label>
                        <input id="endereco" type="text" name="endereco" placeholder="Endereço" required value="<?= $campo["endereco"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="n">Nº</label>
                        <input id="n" type="text" name="n" placeholder="Nº" required value="<?= $campo["n"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="complemento">Complemento</label>
                        <input id="complemento" type="text" name="complemento" placeholder="Complemento" value="<?= $campo["bairro"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" name="bairro" placeholder="Bairro" required value="<?= $campo["bairro"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" type="text" name="cidade" placeholder="Cidade" required value="<?= $campo["cidade"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="estado">Estado</label>
                        <input id="estado" type="text" name="estado" placeholder="Estado" required value="<?= $campo["estado"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="tel_cel">Celular</label>
                        <input id="tel_cel" type="text" name="tel_cel" placeholder="Celular" required value="<?= $campo["tel_cel"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Email" required value="<?= $campo["email"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="funcao">Função</label>
                        <input id="funcao" type="text" name="funcao" placeholder="Função" required value="<?= $campo["funcao"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="data_admissao">Data de Admissão</label>
                        <input id="data_admissao" type="date" name="data_admissao" placeholder="Data de Admissão" required value="<?= $campo["data_admissao"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="salario">Salário</label>
                        <input id="salario" type="text" name="salario" placeholder="Salário" required value="<?= $campo["salario"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="turno">Turno</label>
                        <input id="turno" type="text" name="turno" placeholder="Turno" required value="<?= $campo["turno"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" placeholder="CPF" required value="<?= $campo["cpf"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="rg">RG</label>
                        <input id="rg" type="text" name="rg" placeholder="RG" required value="<?= $campo["rg"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="orgao_emissor">Órgão Emissor</label>
                        <input id="orgao_emissor" type="text" name="orgao_emissor" placeholder="Órgão Emissor" required value="<?= $campo["orgao_emissor"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="uf">UF</label>
                        <input id="uf" type="text" name="uf" placeholder="UF" required value="<?= $campo["uf"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="data_expedicao">Data de Expedição</label>
                        <input id="data_expedicao" type="date" name="data_expedicao" placeholder="Data de Expedição" required value="<?= $campo["data_expedicao"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="ctps">CTPS</label>
                        <input id="ctps" type="text" name="ctps" placeholder="CTPS" required value="<?= $campo["ctps"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="data_emissao">Data de Emissão</label>
                        <input id="data_emissao" type="date" name="data_emissao" placeholder="Data de Emissão" required value="<?= $campo["data_emissao"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="pis">PIS</label>
                        <input id="pis" type="text" name="pis" placeholder="PIS" required value="<?= $campo["pis"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="banco">Banco</label>
                        <input id="banco" type="text" name="banco" placeholder="Banco" required value="<?= $campo["banco"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="agencia">Agência</label>
                        <input id="agencia" type="text" name="agencia" placeholder="Agência" required value="<?= $campo["agencia"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="conta">Conta</label>
                        <input id="conta" type="text" name="conta" placeholder="Conta" required value="<?= $campo["conta"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="tipo">Tipo</label>
                        <input id="tipo" type="text" name="tipo" placeholder="Tipo" required value="<?= $campo["tipo"] ?>">
                    </div>

                    <div class="input-box">
                        <label for="pix">Pix</label>
                        <input id="pix" type="text" name="pix" placeholder="Pix" required value="<?= $campo["pix"] ?>">
                    </div>
                </div>
                <div class="continue-button" >
                    <button type="submit" style="color:#fff; font-size: 1rem;">Editar</button>

                    <button type="button" style="color:#fff"> <a href="../telas/indexADM.html">Cancelar</a></button>
                </div>
            </form>



        </div>

    </body>
</html>
