<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Projeto</title>
    <link rel="stylesheet" href="../css/StyleFormProjetos.css">
</head>
<body>
 
        <div class="form">
            <form action="CadastrarProjetos.php" method="post">
                <div class="form-header">
                        <h1>Projeto</h1>
                    
                    
                </div>

                <div class="input-group">
                   
                    <div class="input-box" style="width: 100%">
                        <label for="tipo">Tipo</label>
                        <input id="tipo" type="text" name="tipo"  placeholder="Digite o tipo" required>
                    </div>
                    <div class="input-box" style="width: 100%">
                        <label for="arquiteto_responsavel">Arquiteto responsável</label>
                        <input id="arquiteto_responsavel" type="text" name="arquiteto_responsavel" placeholder="Digite o arquiteto" required>
                    </div>
                    <div class="input-box">
                        <label for="estilo_de_projeto">Estilo de projeto</label>
                        <input id="estilo_de_projeto" type="text" name="estilo_de_projeto" placeholder="Digite o estilo de projeto" required>
                    </div>
                    <div class="input-box" style="width: 100%" >
                        <label for="orcamento" >Orçamento</label>
                        <input id="orcamento" type="text" name="orcamento"  placeholder="Digite o orçamento" required>
                    </div>
                    
                    <div class="input-box" style="width: 100%">
                        <label for="prazo_entrega">Prazo de entrega</label>
                        <input id="prazo_entrega" type="date" name="prazo_entrega">
                    </div>
                    <div class="input-box" style="width: 100%" >
                        <label for="cliente" >Cliente</label>
                        <input id="cliente" type="text" name="cliente"  placeholder="Digite o cliente" required>
                    </div>
                    
                    <div class="input-box" style="width: 100%">
                        <label for="descricao">Descrição</label>
                        <input id="descricao" type="text" name="descricao">
                    </div>

</div>
                <div class="continue-button" >
                    <button type="submit" style="color:#fff; font-size: 1rem;">Cadastrar</button>
               
                    <button type="button" style="color:#fff"> <a href="../telas/indexADM.html">Cancelar</a></button>
                </div>
            </form>
            

        
    </div>
     
    
</body>
</html>

