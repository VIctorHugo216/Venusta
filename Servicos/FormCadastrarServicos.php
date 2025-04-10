<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de serviços</title>
    <link rel="stylesheet" href="../css/StyleFormServ.css">
</head>
<body>
 
        <div class="form">
            <form action="CadastrarServicos.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Serviços</h1>
                    </div>
                    
                </div>

                <div class="input-group">
                   
                    <div class="input-box" style="width: 100%">
                        <label for="cliente">Nome</label>
                        <input id="cliente" type="text" name="nome"  placeholder="Digite o nome do cliente" required>
                    </div>
                    <div class="input-box">
                        <label for="data">Tipo de Servicos</label>
                        <input id="data" type="text" name="tipo_servico" placeholder="Tipo de serviço" required>
                    </div>
          
                    <div class="input-box" style="width: 100%">
                        <label for="horario">Materiais</label>
                        <input id="horario" type="text" name="materiais" placeholder="Materiais" required>
                    </div>
                    <div class="input-box">
                        <label for="arquiteto" >Valor do Serviço</label>
                        <input id="arquiteto" type="text" name="valor_do_servico"  placeholder="Valor do serviço" required>
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


