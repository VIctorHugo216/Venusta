<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Tipo de Projeto</title>
    <link rel="stylesheet" href="../css/StyleFormProjetos.css">
</head>
<body>
 
        <div class="form">
            <form action="CadastrarTipoProjetos.php" method="post">
                <div class="form-header">
                        <h1>Tipos de Projeto</h1>
                    
                    
                </div>

                <div class="input-group">
                   
                    <div class="input-box" style="width: 100%">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome"  placeholder="Digite o nome" required>
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

