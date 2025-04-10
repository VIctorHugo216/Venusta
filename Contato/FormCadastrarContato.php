<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de cadastro</title>
        <link rel="stylesheet" href="../css/StyleFormContato.css">
    </head>
    <body>
        <div class="form">
            <form action="CadastrarContato.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Contato</h1>
                    </div>

                </div>

                <div class="input-group">

                    <div class="input-box">
                        <label for="cliente">Cliente</label>
                        <input id="cliente" type="cliente" name="cliente"  placeholder="Cliente" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-box">
                        <label for="tipo">Tipo</label>
                        <select id="tipo" name="tipo" required>
                            <option value="">Selecione um tipo</option>
                            <option value="duvida">Dúvida</option>
                            <option value="sugestao">Sugestão</option>
                            <option value="reclamacao">Reclamação</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="descricao" >Descrição</label>
                        <textarea id="descricao" type="descricao" rows="3" cols="40" name="descricao"  placeholder="Descrição" required></textarea>
                    </div>

                </div>
                <div class="continue-button" >
                    <button type="submit" style="color:#fff; font-size: 1rem;">Cadastrar</button>

                    <button type="button" style="color:#fff"> <a href="../telas/indexCliente.html">Cancelar</a></button>
                </div>
            </form>



        </div>
    </body>
</html>

