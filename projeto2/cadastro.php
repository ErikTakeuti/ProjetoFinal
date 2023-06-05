<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style3.css">

    <title>CADASTRO</title>
</head>
<body>
    <div class="container">
        <div class="title">Cadastrar</div>
        <form action="recebe_cad_cliente.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nome Completo</span>
                    <input type="text" placeholder="Nome Completo" name="nome" required>
                </div> 
                <div class="input-box">
                    <span class="details">E-mail</span>
                    <input type="text" placeholder="E-mail" name="email" required>
                </div> 
                <div class="input-box">
                    <span class="details">Senha</span>
                    <input type="text" placeholder="Senha" name="senha" required>
                </div> 
                <div class="input-box">
                    <span class="details">CPF</span>
                    <input type="text" placeholder="CPF" name="cpf" required>
                </div> 
                <div class="input-box">
                    <span class="details">RG</span>
                    <input type="text" placeholder="RG" name="rg" required>
                </div> 
                <div class="input-box">
                    <span class="details">Telefone</span>
                    <input type="text" placeholder="Telefone" name="telefone" required>
                </div> 
                <div class="input-box">
                    <span class="details">Endereço</span>
                    <input type="text" placeholder="Endereço" name="endereco" required>
                </div> 
                    <input type="submit" class="button" name ="butao" value="Enviar">
                    
            </div>
        </form>
    </div>
</body>
</html>