<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Reunião</title>
        <link rel="stylesheet" href="../css/StyleFormReuniao1.css">
    </head>
    <body>
        <div class="container">
            <div class="form">
                <form id="cpfForm" action="CadastrarReuniao.php" method="post">
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastrar Reunião</h1>
                        </div>             
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="nome_evento">Nome Evento</label>
                            <input id="nome_evento" type="text" name="nome" placeholder="Digite um nome" required>
                        </div>

                        <div class="inline-group">
                            <div class="input-box">
                                <label for="dt_evento">Data do Evento</label>
                                <input id="dt_evento" type="date" name="data" required>
                            </div>

                            <div class="input-box">
                                <label for="horario">Horário</label>
                                <input id="horario" type="time" name="horario" required>
                            </div>
                        </div>

                        <div class="input-box">
                            <label for="cliente">Cliente</label>
                            <input id="cliente" type="text" name="cliente" placeholder="Digite o nome do cliente" required>
                        </div>

                        <div class="input-box">
                            <label for="arquiteto">Arquiteto Responsável</label>
                            <input id="arquiteto" type="text" name="arquiteto" placeholder="Digite o Arquiteto Responsável" required>
                        </div>

                        <div class="input-box">
                            <label for="descricao">Descrição</label>
                            <input id="descricao" type="text" name="descricao" required>
                        </div>            
                    </div>    
                    <br><br>
                    <div class="button-group">
                        <div class="continue-button">
                            <button type="submit" style="color:#fff">Cadastrar</button>
                        </div>
                        <div class="continue-button">
                            <a href="../telas/indexADM.html">
                                <button type="button" style="color:#fff">Cancelar</button>
                            </a>
                        </div>
                    </div>

                   
                </form>
            </div>
        </div>
    </body>
</html>
