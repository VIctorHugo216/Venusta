<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro</title>
    <link rel="stylesheet" href="../css/styleFormCliente1.css">
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="../img/Clean Elegant Typography Brand Logo.png" alt="">
        </div>
        <div class="form">
            <form id="cpfForm" action="CadastrarCliente.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="../LoginCliente/LoginCliente.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="pnome" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf"  placeholder="Digite seu cpf" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="celular" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="text" name="senha" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="text" name="senha" placeholder="Digite sua senha novamente" required>
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
                    <button type="submit" style="color:#fff; font-size: 1rem;">Cadastrar</button>
               
                    <button type="button" style="color:#fff; font-size: 1rem;"> <a href="../telas/index.html">Cancelar</a></button>
                </div>
            </form>
            <script>
function validaCPF(cpf) {
	cpf = cpf.replace(/\D+/g, '');
	if (cpf.length !== 11) return false;

	let soma = 0;
	let resto;
	if (/^(\d)\1{10}$/.test(cpf)) return false;

	for (let i = 1; i <= 9; i++) soma += parseInt(cpf.substring(i-1, i)) * (11 - i);
	resto = (soma * 10) % 11;
	if ((resto === 10) || (resto === 11)) resto = 0;
	if (resto !== parseInt(cpf.substring(9, 10))) return false;

	soma = 0;
	for (let i = 1; i <= 10; i++) soma += parseInt(cpf.substring(i-1, i)) * (12 - i);
	resto = (soma * 10) % 11;
	if ((resto === 10) || (resto === 11)) resto = 0;
	if (resto !== parseInt(cpf.substring(10, 11))) return false;
          
        //alert('CPF cadastrado.');
	return true;
}

document.addEventListener('DOMContentLoaded', function() {
	document.getElementById('cpfForm').addEventListener('submit', function(e) {
		var cpf = document.getElementById('cpf').value;
		if (!validaCPF(cpf)) {
			e.preventDefault();
			alert('CPF inválido. Verifique o número digitado.');
			document.getElementById('cpf').focus();
		}
	});

	document.getElementById('cpf').addEventListener('input', function(e) {
		var value = e.target.value;
		var cpfPattern = value.replace(/\D/g, '')
							  .replace(/(\d{3})(\d)/, '$1.$2')
							  .replace(/(\d{3})(\d)/, '$1.$2')
							  .replace(/(\d{3})(\d)/, '$1-$2')
							  .replace(/(-\d{2})\d+?$/, '$1');
		e.target.value = cpfPattern;
	});
});

</script>
        </div>
    </div>
  
</body>
</html>

